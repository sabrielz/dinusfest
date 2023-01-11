<?php

// use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('');
// });

// Route::controller(ViewController::class)->group(function () {
// });
Route::get('/', fn() => view('landingpage.pages.index'));
Route::get('/login', fn() => view('landingpage.pages.login'));
Route::get('/kontak', fn() => view('landingpage.pages.kontak'));

Route::prefix('/dashboard')->group(function () {
	Route::get('/', fn() => view('admin.pages.index'));
	Route::get('/topup', fn() => view('admin.pages.topup'));
	Route::get('/profil', fn() => view('admin.pages.profil'));
	Route::get('/pengguna', fn() => view('admin.pages.pengguna.index'));
	Route::get('/pengguna/tambah', fn() => view('admin.pages.pengguna.tambah'));
	Route::get('/laporan', fn() => view('admin.pages.laporan'));
	
	Route::get('/kontrol', fn() => view('admin.pages.kontrol', [
		'data_jajan' => [
			['product_name' => 'Batagor', 'product_price' => 5000],
			['product_name' => 'APsdjasd', 'product_price' => 5000],
			['product_name' => 'akjsnasjad', 'product_price' => 5000],
		]
	]));
});

Route::prefix('/siswa')->group(function () {
	Route::get('/', fn() => view('siswa.pages.index'));
	Route::get('/laporan', fn() => view('siswa.pages.laporan'));
	Route::get('/belanja', fn() => view('siswa.pages.belanja.index'));
	Route::get('/belanja/tambah', fn() => view('siswa.pages.belanja.tambah'));
	Route::get('/belanja/keranjang', fn() => view('siswa.pages.belanja.keranjang'));
	Route::get('/profil', fn() => view('siswa.pages.profile'));
});