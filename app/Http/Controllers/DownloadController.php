<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Book;
use Storage;
class DownloadController extends Controller
{
    public function download($pdf){
        return back()->download(storage_path("app/public/{$pdf}"),$pdf );
        //return response()->download('books/'.$pdf);
        //PDF file is stored under project/public/download/info.pdf
        /*$file= public_path(). "/ibitabo".$pdf;

        $headers = array(
                'Content-Type: application/pdf',
                );

        $request->session()->flash('success', 'The book was successfully downloaded!');
        return Response::download($file, $pdf, $headers);*/
    }
}
