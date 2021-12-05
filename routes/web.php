<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
// use App\Http\Controllers\ProdukController::toggleAction();
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DetailPesananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PesananController;


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
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home']);
Route::get('/checkout', [CheckoutController::class, 'checkout']);
Route::post('/checkout/{tokendata}', [CheckoutController::class, 'getcart']);

Route::get('/login', [AdminController::class, 'login']);
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/admin', [AdminController::class, 'home']);
Route::get('/admin/manage', [AdminController::class, 'manage']);
Route::get('/admin/selling', [AdminController::class, 'selling']);
Route::get('/admin/selling/{accselling}/acc', [AdminController::class, 'accSelling']);
Route::get('/admin/selling/{decselling}/dec', [AdminController::class, 'decSelling']);

Route::resource('produks', ProdukController::class);
Route::get('produks/toggleAction/{produk}', [ProdukController::class, 'toggleAction']);
Route::resource('detail_pesanans', DetailPesananController::class);
Route::resource('pesanans', PesananController::class);

// Route::get('/login', [LoginCotroller::class, 'index']);
// Route::apiResource('/screen', BasicScreeningController::class);
