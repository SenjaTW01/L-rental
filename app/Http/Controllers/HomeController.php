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
        return view('layouts.pembayaranPage');
    }
    public function beli()
    {
        return view('layouts.belipage');
    }
}
