<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    
    public function index() {
        // return;
    }

    public function login() {
        return view('landingpage.pages.login');
    }
    
}
