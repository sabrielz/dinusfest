<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller {

    public function index() {
        return view('admin.pages.index', []);
    }

    public function topup() {
        $pengguna = User::where('type', 'siswa')->get();
        
        return view('admin.pages.topup', [
            'data_pengguna' => $pengguna
        ]);
    }

    public function post_topup(Request $req) {
        $creden = $req->validate([
            'bayar' => 'required', 'user' => 'required'
        ]);

        $user = User::find($creden['user']);
        $user->finance()->update([ 'finance_balance' => $user->finance->finance_balance + $creden['bayar'] ]);
        $user->payments()->create([
            'type' => 'topup',
            'finance_id' => $user->finance->finance_id,
            'bill' => $creden['bayar'],
        ]);

        return back()->withErrors([
            'alerts' => ['success' => 'Berhasil menambahkan saldo.']
        ]);
    }

    public function profil() {
        return view('admin.pages.profil', [

        ]);
    }

    public function laporan() {
        $laporan = Payment::with([])->where('type', 'topup')->latest()->get();
        
        return view('admin.pages.laporan', [
            'laporan' => $laporan
        ]);
    }

    public function kontrol() {
        return view('admin.pages.kontrol', [
            'data_jajan' => Product::with('category')->get()
        ]);
    }

}
