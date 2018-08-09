<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getUsers()
    {
        $users = User::orderBy('id', 'desc')->paginate(5);
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.users.index')->withPosts($users)->withUserNum($AllUsers)->withMessages($AllMessages);
    }

    public function show($id)
    {
        $user = User::find($id);
        $AllUsers = User::all();
        $AllMessages = Message::where('readed', '=', 0)->orderBy('id', 'desc')->get();
        return view('adminpages.users.show')->withPost($user)->withUserNum($AllUsers)->withMessages($AllMessages);
    }
}
