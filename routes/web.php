<?php

use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'index']);
Route::get('/produk', [WebController::class, 'produk']);
Route::get('/galeri', [WebController::class, 'galeri']);
Route::get('/about', [WebController::class, 'about']);
Route::get('/detail/{slug}', [WebController::class, 'detail']);

#

Route::get('/admin', [WebController::class, 'slideshow_']);
Route::get('/admin/kategori', [WebController::class, 'kategori_']);
Route::get('/admin/produk', [WebController::class, 'produk_']);
Route::get('/admin/info', [WebController::class, 'info_']);
Route::get('/admin/galeri', [WebController::class, 'galeri_']);
