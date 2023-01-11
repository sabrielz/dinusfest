<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrtuController extends Controller {
    
    public function index() {
        return view('ortu.pages.index');
    }

    public function kontrol() {
        return view('ortu.pages.kontrol');
    }
    
}
