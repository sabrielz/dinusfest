<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public function index() {
        return view('admin.pages.index', []);
    }

    public function topup() {
        return view('admin.pages.topup', [

        ]);
    }

    public function profil() {
        return view('admin.pages.profil', [

        ]);
    }

    public function laporan() {
        return view('admin.pages.laporan', [

        ]);
    }

    public function kontrol() {
        return view('admin.pages.kontrol', [
            'data_jajan' => Product::with('category')->get()
        ]);
    }

}
