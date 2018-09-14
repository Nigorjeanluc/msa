<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use App\Message;
use App\Publication;
use Purifier;
use Session;
use Image;
use Storage;

class PublicationController extends Controller
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
        $AllAdmins = Admin::all();
        $AllPubs = Publication::paginate(5);
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.publication.index')->withUserNum($AllUsers)->withAdminNum($AllAdmins)->withMessages($AllMessages)->withPosts($AllPubs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $AllUsers = User::all();
        $AllAdmins = Admin::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.publication.create')->withUserNum($AllUsers)->withAdminNum($AllAdmins)->withMessages($AllMessages);
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
            'role'           => 'required|max:100',
            'description'           => 'required',
            'pdf'  => 'required|mimes:doc,pdf,docx,zip',
            'featured_img'  => 'required|image'
        ));
        // store in the database
        $publication = new Publication;

        $publication->title = $request->title;
        $publication->role= $request->role;
        $publication->pdf= $request->pdf;
        $publication->description = Purifier::clean($request->description);

        if($request->hasFile('pdf')) {
            $doc = $request->file('pdf');
            $filename = $doc->getClientOriginalName();
            $location = public_path('ibitabo/');
            //or $filename = time() . '.' . $image->encode('png');
            //$location = public_path('images/news/');
            //or $location = storage_path('/app/posts/');
            //$image->move($location, $filename);
            //Image::make($image)->resize(1366, 768)->save($location);
            $doc->move($location, $filename);

            $publication->pdf = $filename;
        }

        if($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/' . $filename);
            //or $filename = time() . '.' . $image->encode('png');
            //$location = public_path('images/news/');
            //or $location = storage_path('/app/posts/');
            //$image->move($location, $filename);
            Image::make($image)->resize(300, 165)->save($location);

            $publication->img = $filename;
        }

        $publication->save();
        
        $request->session()->flash('success', 'The book post was successfully uploaded!');
        
        // redirect to another page
        
        return redirect()->route('publications.show', $publication->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        $publication = Publication::find($id);
        return view('adminpages.publication.show')->withUserNum($AllUsers)->withPost($publication)->withMessages($AllMessages);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        // find the post in the database and save as var
        $publication = Publication::find($id);
        // return the view and pass in the var we previously created
        return view('adminpages.publication.edit')->withPost($publication)->withMessages($AllMessages)->withUserNum($AllUsers);
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
        $publication = Publication::find($id);
        $this->validate($request, array(
            'title'          => 'required|max:255',
            'role'           => 'required|max:100',
            'description'           => 'required',
            'pdf'  => 'required|mimes:doc,pdf,docx,zip',
            'featured_img'  => 'required|image'
        ));

        $publication->title = $request->title;
        $publication->role= $request->role;
        $publication->pdf= $request->pdf;
        $publication->description = Purifier::clean($request->description);

        if($request->hasFile('pdf')) {
            $doc = $request->file('pdf');
            $filename = $doc->getClientOriginalName();
            $location = public_path('ibitabo/');
            //or $filename = time() . '.' . $image->encode('png');
            //$location = public_path('images/news/');
            //or $location = storage_path('/app/posts/');
            //$image->move($location, $filename);
            //Image::make($image)->resize(1366, 768)->save($location);
            $doc->move($location, $filename);
            $oldFilename = $publication->pdf;
            $publication->pdf = $filename;
            Storage::delete($oldFilename);
        }

        if($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/' . $filename);
            //or $filename = time() . '.' . $image->encode('png');
            //$location = public_path('images/news/');
            //or $location = storage_path('/app/posts/');
            //$image->move($location, $filename);
            Image::make($image)->resize(300, 165)->save($location);
            $oldFilename = $publication->img;
            $publication->img = $filename;
            Storage::delete($oldFilename);
        }

        $publication->save();
       

        // Set flash data with success message
        $request->session()->flash('success', 'The blog post was successfully saved!');

        // Redirect with flash data to posts.show
        return redirect()->route('publications.show', $publication->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publication = Publication::find($id);
        Storage::delete($publication->img);
        Storage::delete($publication->pdf);

        $publication->delete();

        
        Session::flash('success', 'The post was successfully deleted.');
        

        return redirect()->route('publications.index');
    }
}
