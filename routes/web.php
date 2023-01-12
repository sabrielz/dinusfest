<?php

// use App\Http\Controllers\ViewController;

use App\Http\Controllers\Siswa\BelanjaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\View\AdminController;
use App\Http\Controllers\View\LandingPageController;
use App\Http\Controllers\View\OrtuController;
use App\Http\Controllers\View\SiswaController;
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

Route::controller(LandingPageController::class)->group(function () {
	Route::get('/', 'index');
	Route::get('/login', 'login');
	Route::get('/kontak', 'kontak');
});

Route::controller(LoginController::class)->group(function () {
	Route::post('/login', 'authenticate');
	Route::get('/logout', 'logout');
});

Route::controller(UserController::class)->group(function () {
	Route::get('/profil/{tb_users:id}', 'edit');
	Route::post('/profil/{tb_users:id}', 'update');
});

Route::prefix('/admin')->group(function () {
	Route::controller(AdminController::class)->group(function () {
		Route::get('/', 'index');
		Route::get('/topup', 'topup');
		Route::post('/topup', 'post_topup');
		Route::get('/laporan', 'laporan');
		Route::get('/rekap', 'rekap');
	});

	Route::prefix('/pengguna')->group(function () {
		Route::controller(UserController::class)->group(function () {
			Route::get('/', 'index');
			Route::get('/tambah', 'create');
			Route::post('/', 'store');
		});
	});
});

Route::prefix('/ortu')->group(function () {
	Route::controller(OrtuController::class)->group(function () {
		Route::get('/', 'index');
		Route::get('/kontrol', 'kontrol');
		Route::post('/kontrol', 'post_kontrol');
		Route::post('/daily/{tb_users:id}', 'post_daily');
		Route::get('/laporan', 'laporan');
	});
});

// Route::prefix('/admin')->group(function () {
// 	Route::get('/', fn() => view('dashboard.pages.index'));
// 	Route::get('/topup', fn() => view('dashboard.pages.topup'));
// 	Route::get('/profil', fn() => view('dashboard.pages.profil'));
// 	Route::get('/pengguna', fn() => view('dashboard.pages.pengguna.index'));
// 	Route::get('/pengguna/tambah', fn() => view('dashboard.pages.pengguna.tambah'));
// 	Route::get('/laporan', fn() => view('dashboard.pages.laporan'));
	
// 	Route::get('/kontrol', fn() => view('dashboard.pages.kontrol', [
// 		'data_jajan' => [
// 			['product_name' => 'Batagor', 'product_price' => 5000],
// 			['product_name' => 'APsdjasd', 'product_price' => 5000],
// 			['product_name' => 'akjsnasjad', 'product_price' => 5000],
// 		]
// 	]));
// });

Route::get('/test', fn() => redirect('/siswa')->withErrors([
	'alerts' => [
		'danger' => 'Example danger alert!',
		'success' => 'Example success alert!',
		'warning' => 'Example warning alert!',
	]
]));

Route::prefix('/siswa')->group(function () {
	Route::controller(SiswaController::class)->group(function () {
		Route::get('/', 'index');
		Route::get('/laporan', 'laporan');
	});

	Route::controller(BelanjaController::class)->group(function () {
		Route::get('/belanja', 'index');
		Route::get('/kantin/{canteen}', 'showCanteen');
		Route::post('/kantin', 'storePayment');
		Route::get('/nota/{nota}', 'nota');
	});
});