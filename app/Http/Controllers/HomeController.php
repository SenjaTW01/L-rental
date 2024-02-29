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
    public function card(){
        return view('cardpage');
    }
    public function login(){
        return view('login');
    }

    public function signup(){
        return view('pensi');
    }
}
