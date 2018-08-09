<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;
use App\Serie;
use App\Short;
use App\Message;
use Purifier;
use Session;
use Image;
use Storage;

class SerieController extends Controller
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
        $series = Serie::orderBy('id', 'desc')->paginate(5);
        return view('adminpages.series.index')->withUserNum($AllUsers)->withPosts($series)->withMessages($AllMessages);
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
        return view('adminpages.series.create')->withUserNum($AllUsers)->withMessages($AllMessages);
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
            'description'           => 'required',
            'featured_img'  => 'required|image'
        ));
        // store in the database
        $serie = new Serie;

        $serie->title = $request->title;
        $serie->author= $request->author;
        $serie->description = Purifier::clean($request->description);

        if($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            //or $filename = time() . '.' . $image->encode('png');
            //$location = public_path('images/news/');
            //or $location = storage_path('/app/posts/');
            //$image->move($location, $filename);
            Image::make($image)->resize(300, 165)->save($location);

            $serie->image = $filename;
        }

        $serie->save();
        
        $request->session()->flash('success', 'The book post was successfully uploaded!');
        
        // redirect to another page
        
        return redirect()->route('series.show', $serie->id);
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
        $serie = Serie::find($id);
        return view('adminpages.series.show')->withUserNum($AllUsers)->withPost($serie)->withMessages($AllMessages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serie = Serie::find($id);
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.series.edit')->withPost($serie)->withUserNum($AllUsers)->withMessages($AllMessages);
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
        $serie = Serie::find($id);

        $this->validate($request, array(
            'title'          => 'required|max:255',
            'author'           => 'required|max:100',
            'description'           => 'required',
            'featured_img'  => 'sometimes|image'
        ));

        $serie->title = $request->title;
        $serie->author= $request->author;
        $serie->description = Purifier::clean($request->description);

        if ($request->hasFile('featured_img')) {
            // add the new photo
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(300, 165)->save($location);
            //$image->move($location, $filename);
            $oldFilename = $serie->image;
            // update the database
            $serie->image = $filename;
            // Delete the old photo
            Storage::delete($oldFilename);
        }

        

        $serie->save();
        
        $request->session()->flash('success', 'The book post was successfully uploaded!');
        
        // redirect to another page
        
        return redirect()->route('series.show', $serie->id);
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
