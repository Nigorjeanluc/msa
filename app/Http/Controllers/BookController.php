<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use App\Message;
use Purifier;
use Session;
use Image;
use Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        $books = Book::orderBy('id', 'desc')->paginate(5);
        return view('adminpages.books.index')->withUserNum($AllUsers)->withPosts($books)->withMessages($AllMessages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.books.create')->withUserNum($AllUsers)->withMessages($AllMessages);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title'          => 'required|max:255',
            'author'           => 'required|max:100',
            'category'    => 'required|max:100',
            'year'    => 'required|integer',
            'description'           => 'required',
            'featured_img'  => 'required|image',
            'featured_pdf' => 'required|mimes:doc,pdf,docx,zip'
        ));
        // store in the database
        $book = new Book;

        $book->title = $request->title;
        $book->author= $request->author;
        $book->category = $request->category;
        $book->year = $request->year;
        $book->confirmed = $request->confirmed;
        $book->description = Purifier::clean($request->description);

        //save our image
        if($request->hasFile('featured_pdf')) {
            $doc = $request->file('featured_pdf');
            $filename = $doc->getClientOriginalName();
            $location = public_path('ibitabo/');
            //or $filename = time() . '.' . $image->encode('png');
            //$location = public_path('images/news/');
            //or $location = storage_path('/app/posts/');
            //$image->move($location, $filename);
            //Image::make($image)->resize(1366, 768)->save($location);
            $doc->move($location, $filename);

            $book->pdf = $filename;
        }

        if($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            //or $filename = time() . '.' . $image->encode('png');
            //$location = public_path('images/news/');
            //or $location = storage_path('/app/posts/');
            //$image->move($location, $filename);
            Image::make($image)->resize(300, 165)->save($location);

            $book->image = $filename;
        }

        $book->save();
        
        $request->session()->flash('success', 'The book post was successfully uploaded!');
        
        // redirect to another page
        
        return redirect()->route('books.show', $book->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        $book = Book::find($id);
        return view('adminpages.books.show')->withUserNum($AllUsers)->withPost($book)->withMessages($AllMessages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        $AllUsers = User::all();
        return view('adminpages.books.edit')->withPost($book)->withUserNum($AllUsers)->withMessages($AllMessages);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);

        $this->validate($request, array(
            'title'          => 'required|max:255',
            'author'           => 'required|max:100',
            'category'    => 'required|max:100',
            'year'    => 'required|integer',
            'description'           => 'required',
            'featured_img'  => 'sometimes|image',
            'featured_pdf' => 'sometimes|mimes:doc,pdf,docx,zip'
        ));

        $book->title = $request->title;
        $book->author= $request->author;
        $book->category = $request->category;
        $book->year = $request->year;
        $book->confirmed = $request->confirmed;
        $book->description = Purifier::clean($request->description);

        //save our image
        if($request->hasFile('featured_pdf')) {
            $doc = $request->file('featured_pdf');
            $filename = $doc->getClientOriginalName();
            $location = public_path('ibitabo/');
            //or $filename = time() . '.' . $image->encode('png');
            //$location = public_path('images/news/');
            //or $location = storage_path('/app/posts/');
            //$image->move($location, $filename);
            //Image::make($image)->resize(1366, 768)->save($location);
            $doc->move($location, $filename);

            $oldFilename = $book->pdf;
            // update the database
            $book->pdf = $filename;
            // Delete the old photo
            Storage::delete($oldFilename);
        }

        if ($request->hasFile('featured_img')) {
            // add the new photo
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(300, 165)->save($location);
            //$image->move($location, $filename);
            $oldFilename = $book->image;
            // update the database
            $book->image = $filename;
            // Delete the old photo
            Storage::delete($oldFilename);
        }

        

        $book->save();
        
        $request->session()->flash('success', 'The book post was successfully uploaded!');
        
        // redirect to another page
        
        return redirect()->route('books.show', $book->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
