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
}
