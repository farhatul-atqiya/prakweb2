<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PesananController;

use App\Http\Controllers\InputController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormInputController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\KategoriProdukController;
use App\Models\KategoriProduk;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Siang Pa Rojul";
});

Route::get('/about', function () {
    return view('about',[
        "nama" => "Farhatul Atqiya",
        "umur" => 19,
        "email" => "farhatulatqiya03@gmail.com"
    ]);
});

Route::get('/periksa', function () {
    return view('periksa');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::get('/forminput', [FormInputController::class, 'index']);
Route::post('/formoutput', [FormInputController::class, 'formoutput']);

//ini route untuk backend atau admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::post('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}',[ProdukController::class, 'destroy']);

    Route::get('/pesanan', [PesananController::class, 'index']);
    Route::get('/pesanan/create', [PesananController::class, 'create']);
    Route::post('/pesanan/store', [PesananController::class, 'store']);
    Route::get('/pesanan/edit/{id}', [PesananController::class, 'edit']);
    Route::post('/pesanan/update/{id}', [PesananController::class, 'update']);
    Route::get('/pesanan/delete/{id}',[PesananController::class, 'destroy']);

    Route::get('/KategoriProduk', [KategoriProdukController::class, 'index']);
    Route::get('/KategoriProduk/create', [KategoriProdukController::class, 'create']);
    Route::post('/KategoriProduk/store', [KategoriProdukController::class, 'store']);
    Route::get('/KategoriProduk/delete/{id}',[KategoriProdukController::class, 'destroy']);

});

Route::prefix('arsha')->group(function () {
    Route::get('/frontend', [FrontendController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);

});
//ini route untuk frontend atau user