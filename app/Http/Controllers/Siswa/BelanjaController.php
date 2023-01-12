<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Canteen;
use App\Models\Payment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BelanjaController extends Controller
{
	public function index()
	{
		$kantin = Canteen::select('canteen_id','canteen_name')->get();

		return view('siswa.pages.belanja.index', [
			'kantin' => $kantin
		]);
	}

	public function showCanteen(Canteen $canteen)
	{
		// dd($canteen->products[0]['value']);
		$products = Product::whereIn('product_id', $canteen->products[0]['value'])->get();

		return view('siswa.pages.belanja.tambah', [
			'kantin' => $canteen,
			'products' => $products
		]);
	}

	public function storePayment(Request $request)
	{
		// dd($request->items);
		$bill = 0;

		foreach ($request->items as $key => $value) {
			$price = Product::find($value['product_id']);
			$bill += $price->product_price * $value['jumlah'];
		}

		$finance = $request->user()->finance;
		if ($bill > $finance->finance_balance || $bill > $finance->finance_balance_daily) {
			return back()->withErrors([
				'alerts' => ['danger' => 'Maaf, saldo anda tidak mencukupi.']
			]);
		}

		$payload = [
			'user_id' => Auth::id(),
			'canteen_id' => $request->canteen_id,
			'bill' => $bill,
			'items' => $request->items
		];

		$data = Payment::create($payload);

		$finance->update([
			'finance_balance' => $finance->finance_balance - $bill,
			'finance_balance_daily' => $finance->finance_balance_daily - $bill
		]);

		return redirect('siswa/nota/'. $data->payment_id)->withErrors([
            'alerts' => ['success' => 'Pembelian berhasil.']
        ]);
	}

	public function nota(Payment $nota)
	{
		return view('siswa.pages.belanja.nota', [
			'payment' => $nota
		]);
	}
}
