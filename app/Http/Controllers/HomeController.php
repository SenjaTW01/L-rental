<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homePage()
    {
        return view('homePage');
    }

    public function selection()
    {
        return view('selection');
    }
    public function pembayaran(){
        return view('pembayaranPage');
    }
    public function beli(){
        return view('belipage');
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
