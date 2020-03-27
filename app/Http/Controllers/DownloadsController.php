<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    public function download($file_name)
    {
        $file_path = public_path($file_name);
        dump($file_path);
       // return response()->download($file_path);
    }
}
