<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function home()
    {
        return view ('frontend.home');
    }
    
    public function contact()
    {
        return view ('frontend.contact');
    }
}
