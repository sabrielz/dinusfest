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

Route::get('/admin', fn() => view('admin.pages.index'));

Route::get('/siswa', fn() => view('siswa.pages.index'));
Route::get('/siswa/laporan', fn() => view('siswa.pages.laporan'));
Route::get('/siswa/belanja', fn() => view('siswa.pages.belanja'));
Route::get('/siswa/profile', fn() => view('siswa.pages.profile'));
