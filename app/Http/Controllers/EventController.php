<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Purifier;
use Session;
use Image;
use Storage;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //$this->middleware('guest');
        $this->middleware('auth');
    }

    public function index()
    {
        //$events = Event::orderBy('id', 'desc')->paginate(5);
        /*$events = Event::orderBy('id', 'desc');
        return view('userpages.')->withPosts($events);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userpages.events');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        $this->validate($request, array(
            'title'          => 'required|max:255',
            'header_images' => 'sometimes|image',
            'other_images' => 'sometimes|image',
            'venue'          => 'required|max:255'
        ));

        $event = new Event;

        $event->title = $request->title;
        //save our image
        if($request->hasFile('header_images')) {
            $image = $request->file('header_images');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            //or $filename = time() . '.' . $image->encode('png');
            //$location = public_path('images/news/');
            //or $location = storage_path('/app/posts/');
            //$image->move($location, $filename);
            Image::make($image)->resize(1366, 768)->save($location);

            $event->header_images = $filename;
        }

        //save our image
        if($request->hasFile('other_images')) {
            $image = $request->file('other_images');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            //or $filename = time() . '.' . $image->encode('png');
            //$location = public_path('images/news/');
            //or $location = storage_path('/app/posts/');
            //$image->move($location, $filename);
            Image::make($image)->resize(1366, 768)->save($location);

            $event->other_images = $filename;
        }
        $event->venue = $request->venue;
        $event->content = Purifier::clean($request->content);

        $event->save();
        
        $request->session()->flash('success', 'The event post was successfully saved!');
        
        // redirect to another page
        
        return redirect()->route('events.show', $event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
