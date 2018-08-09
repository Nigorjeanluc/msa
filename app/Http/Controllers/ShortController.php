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

class ShortController extends Controller
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
        $shorts = Short::orderBy('id', 'desc')->paginate(5);
        return view('adminpages.shorts.index')->withUserNum($AllUsers)->withPosts($shorts)->withMessages($AllMessages);
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
        return view('adminpages.shorts.create')->withUserNum($AllUsers)->withMessages($AllMessages);
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
        $short = new Short;

        $short->title = $request->title;
        $short->author= $request->author;
        $short->description = Purifier::clean($request->description);

        if($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            //or $filename = time() . '.' . $image->encode('png');
            //$location = public_path('images/news/');
            //or $location = storage_path('/app/posts/');
            //$image->move($location, $filename);
            Image::make($image)->resize(300, 165)->save($location);

            $short->image = $filename;
        }

        $short->save();
        
        $request->session()->flash('success', 'The book post was successfully uploaded!');
        
        // redirect to another page
        
        return redirect()->route('shorts.show', $short->id);
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
        $short = Short::find($id);
        return view('adminpages.shorts.show')->withUserNum($AllUsers)->withPost($short)->withMessages($AllMessages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $short = Short::find($id);
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.series.edit')->withPost($short)->withUserNum($AllUsers)->withMessages($AllMessages);
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
        $short = Short::find($id);

        $this->validate($request, array(
            'title'          => 'required|max:255',
            'author'           => 'required|max:100',
            'description'           => 'required',
            'featured_img'  => 'sometimes|image'
        ));

        $short->title = $request->title;
        $short->author= $request->author;
        $short->description = Purifier::clean($request->description);

        if ($request->hasFile('featured_img')) {
            // add the new photo
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(300, 165)->save($location);
            //$image->move($location, $filename);
            $oldFilename = $short->image;
            // update the database
            $short->image = $filename;
            // Delete the old photo
            Storage::delete($oldFilename);
        }

        

        $short->save();
        
        $request->session()->flash('success', 'The book post was successfully uploaded!');
        
        // redirect to another page
        
        return redirect()->route('shorts.show', $short->id);
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
