<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller {
    
    public function index() {
        return view('siswa.pages.index');
    }

    public function laporan() {
        $laporan = auth()->user()->payments;
        
        return view('ortu.pages.laporan', [
            'laporan' => $laporan
        ]);
    }

}
