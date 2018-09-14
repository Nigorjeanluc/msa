<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Message;
use App\Publication;
use Mail;
use DB;
use Purifier;

class SingleController extends Controller
{
    public function getSingle($id) {
        $publication = Publication::find($id);
        return view('pages.single')->withPost($publication);
    }
}
