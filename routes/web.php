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
Route::get('/login', [WebController::class, 'login']);
Route::get('/produk', [WebController::class, 'produk']);
Route::get('/galeri', [WebController::class, 'galeri']);
Route::get('/about', [WebController::class, 'about']);
Route::get('/detail/{slug}', [WebController::class, 'detail']);
Route::get('/kategori/{slug}', [WebController::class, 'kategori']);

#Mengakses Admin Page

Route::get('/admin', [WebController::class, 'slideshow_']);
Route::get('/admin/kategori', [WebController::class, 'kategori_']);
Route::get('/admin/produk', [WebController::class, 'produk_']);
Route::get('/admin/info', [WebController::class, 'info_']);
Route::get('/admin/galeri', [WebController::class, 'galeri_']);


#Mengakses Model Fitur
Route::post('/admin', [WebController::class, 'slideAdd']);
Route::get('/admin/delete/{id}', [WebController::class, 'slideDelete']);
Route::post('/admin/kategori', [WebController::class, 'kategoriUpdate']);
Route::get('/admin/kategori/delete/{id}', [WebController::class, 'hapusKategori']);
Route::post('/admin/produk', [WebController::class, 'produkAdd']);
Route::get('/admin/produk/delete/{id}', [WebController::class, 'produkDelete']);
Route::post('/admin/galeri', [WebController::class, 'galeriAdd']);
Route::get('/admin/galeri/delete/{slug}', [WebController::class, 'galeriDelete']);
