<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests; 

class CobaController extends Controller
{
    public function index ()
    {
        return 'test berhasil';
    }

    public function urutan($urutan)
    {
        return view('urutan', ['ke'- $ke]);
    }

}
