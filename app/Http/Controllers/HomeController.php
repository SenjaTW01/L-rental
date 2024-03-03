<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('layouts.homePage');
    }

    public function selection()
    {
        return view('layouts.selection');
    }
    public function pembayaran()
    {
        return view('layouts.pembayaran');
    }
    public function deskripsi()
    {
        return view('layouts.deskripsi');
    }
}
