<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Short;
use App\Serie;

class SingleController extends Controller
{
    public function getSingle($id) {
        $book = Book::find($id);
        $asides = Book::orderBy('id', 'desc')->limit(5)->get();
        return view('pages.single')->withBook($book)->withAsides($asides);
    }

    public function getSeries($id) {
        $book = Serie::find($id);
        $asides = Book::orderBy('id', 'desc')->limit(5)->get();
        return view('pages.singleStory')->withBook($book)->withAsides($asides);
    }

    public function getShorts($id) {
        $book = Short::find($id);
        $asides = Book::orderBy('id', 'desc')->limit(5)->get();
        return view('pages.singleStory')->withBook($book)->withAsides($asides);
    }
}
