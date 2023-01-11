<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Canteen;
use App\Models\Product;
use Illuminate\Http\Request;

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
}
