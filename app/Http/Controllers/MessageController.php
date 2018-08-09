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

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getMessages() {
        $messages = Message::orderBy('id', 'desc')->paginate(5);
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.messages.index')->withPosts($messages)->withUserNum($AllUsers)->withMessages($AllMessages);
    }

    public function show($id)
    {
        $message = Message::find($id);
        $message->readed = 1;
        $message->save();
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.messages.show')->withPost($message)->withUserNum($AllUsers)->withMessages($AllMessages);
    }
}
