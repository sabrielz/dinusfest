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
	
	Route::get('/kontrol', fn() => view('admin.pages.kontrol'));
});

// Route::prefix('/ortu')->group(function () {
// 	Route::get('/', fn() => view('ortu.pages.index'));
// 	// Route::get('/topup', fn() => view('admin.pages.topup'));
// 	Route::get('/profil', fn() => view('ortu.pages.profil'));
// 	Route::get('/pengguna', fn() => view('ortu.pages.pengguna.index'));
// 	Route::get('/pengguna/tambah', fn() => view('ortu.pages.pengguna.tambah'));
// 	Route::get('/laporan', fn() => view('ortu.pages.laporan'));
// });
