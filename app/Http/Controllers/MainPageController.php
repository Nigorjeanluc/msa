<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Admin;
use App\User;
use App\Serie;
use App\Short;
use App\Message;
use Mail;
use DB;
use Purifier;

class MainPageController extends Controller
{
    public function getIndex(){
        $abana = Book::where('category', '=', 'children')->orderBy('id', 'desc')->limit(3)->get();
        $urukundo = Book::where('category', '=', 'love_story')->orderBy('id', 'desc')->limit(3)->get();
        $inganzo = Book::where('category', '=', 'inspiration')->orderBy('id', 'desc')->limit(3)->get();
        $iterambere = Book::where('category', '=', 'personal')->orderBy('id', 'desc')->limit(3)->get();
        $iyobokamana = Book::where('category', '=', 'religion')->orderBy('id', 'desc')->limit(3)->get();
        $series = Serie::orderBy('id', 'desc')->limit(8)->get();
        $shorts = Short::orderBy('id', 'desc')->limit(8)->get();
        return view('pages.index')->withChildren($abana)->withLoves($urukundo)->withInspis($inganzo)->withPeople($iterambere)->withReligions($iyobokamana)->withSeries($series)->withShorts($shorts);
    }

    public function getAbana(){
        $asides = Book::orderBy('id', 'desc')->limit(5)->get();
        $abana = Book::where('category', '=', 'children')->orderBy('id', 'desc')->paginate(10);
        return view('pages.children')->withChildren($abana)->withAsides($asides);
    }

    public function getLove()
    {
        $asides = Book::orderBy('id', 'desc')->limit(5)->get();
        $love = Book::where('category', '=', 'love_story')->orderBy('id', 'desc')->paginate(10);
        return view('pages.love')->withLoves($love)->withAsides($asides);
    }

    public function getInspiration()
    {
        $asides = Book::orderBy('id', 'desc')->limit(5)->get();
        $inspiration = Book::where('category', '=', 'inspiration')->orderBy('id', 'desc')->paginate(10);
        return view('pages.inspiration')->withInspis($inspiration)->withAsides($asides);
    }

    public function getPersonal()
    {
        $asides = Book::orderBy('id', 'desc')->limit(5)->get();
        $people = Book::where('category', '=', 'personal')->orderBy('id', 'desc')->paginate(10);
        return view('pages.personal')->withPeople($people)->withAsides($asides);
    }

    public function getReligion()
    {
        $asides = Book::orderBy('id', 'desc')->limit(5)->get();
        $religions = Book::where('category', '=', 'religion')->orderBy('id', 'desc')->paginate(10);
        return view('pages.religion')->withReligions($religions)->withAsides($asides);
    }

    public function getSeries()
    {
        $asides = Book::orderBy('id', 'desc')->limit(5)->get();
        $series = Serie::orderBy('id', 'desc')->paginate(10);
        return view('pages.series')->withSeries($series)->withAsides($asides);
    }

    public function getShort()
    {
        $asides = Book::orderBy('id', 'desc')->limit(5)->get();
        $shorts = Short::orderBy('id', 'desc')->paginate(10);
        return view('pages.short')->withShorts($shorts)->withAsides($asides);
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request) {
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email',
            'phone' => 'required|digits_between:10,20',
            'message' => 'min:10'
        ]);

        $msg = New Message;
        
        $msg->name = $request->name;
        $msg->email = $request->email;
        $msg->phone = $request->phone;
        $msg->readed = '0';
        $msg->message = Purifier::clean($request->message);

        $msg->save();

       /*Mail::send('auth.emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('hello@jayjay.com');
            $message->subject($data['subject']);
        });*/

        $request->session()->flash('success', 'Ikifuzo cyawe cyakiriwe. Murakoze');

        return redirect()->route('contact');
    }
}
