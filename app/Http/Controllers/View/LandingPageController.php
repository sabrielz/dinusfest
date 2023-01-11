<?php

namespace App\Http\Controllers\View;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    
    public function index() {
        return view('landingpage.pages.index', [
            
        ]);
    }

    public function login() {
        // dd(auth()->user());
        return view('landingpage.pages.login', [

        ]);
    }

    public function kontak() {
        return view('landingpage.pages.kontak', [

        ]);
    }
    
}
