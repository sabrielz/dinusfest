<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrtuController extends Controller {
    
    public function index() {
        return view('ortu.pages.index');
    }

    public function kontrol() {
        $products = Product::all();
        $limited_array = auth()->user()->limiter->items ?? [];
        $limited = [];

        foreach($limited_array as $id) {
            $product = Product::find($id);
            $limited[$id] = $product;
        }

        return view('ortu.pages.kontrol', [
            'data_product' => $products,
            'data_limited' => $limited,
        ]);
    }

    public function post_kontrol(Request $req) {
        $items = json_decode($req->items);

        for ($i=0;$i<count($items);$i++) if ($items[$i] === null) unset($items[$i]);

        auth()->user()->limiter->update([
            'items' => $items
        ]);
        
        return redirect('/ortu/kontrol')->withErrors([
            'alerts' => ['Berhasil membatasi pembelian siswa.']
        ]);
    }

    public function post_daily(Request $req, User $tb_users) {
        $creden = $req->validate([
            'day' => 'required', 'perday' => 'required'
        ]);

        $tb_users->limiter()->update([
            'limit_balance' => $creden['perday']
        ]);
        $tb_users->finance()->update([
            'finance_balance_daily' => $creden['perday']
        ]);

        return redirect('/ortu')->withErrors([
            'alerts' => ['success' => 'Berhasil membagi saldo.']
        ]);
    }

    public function laporan() {
        $laporan = auth()->user()->children[0]->payments;
        
        return view('ortu.pages.laporan', [
            'laporan' => $laporan
        ]);
    }
    
}
