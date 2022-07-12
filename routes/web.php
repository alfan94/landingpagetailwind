<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\TerbaruController;
use App\Http\Controllers\TerlarisController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\KumpulController;
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

Route::get('/rrrrr', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/',[LandingController::class,'index'])->name('landing');
Route::get('/terbaru',[TerbaruController::class,'index'])->middleware(['auth'])->name('terbaru');
Route::get('/terbaru/create',[TerbaruController::class,'create'])->middleware(['auth'])->name('terbaru.create');
Route::post('/terbaru/store',[TerbaruController::class,'store'])->middleware(['auth'])->name('terbaru.store');
Route::get('/terbaru/edit/{id}',[TerbaruController::class,'edit'])->middleware(['auth'])->name('terbaru.edit');
Route::put('/terbaru/update/{id}',[TerbaruController::class,'update'])->middleware(['auth'])->name('terbaru.update');
Route::delete('/terbaru/hapus/{id}',[TerbaruController::class,'hapus'])->middleware(['auth'])->name('terbaru.hapus');


//terlaris
Route::get('/terlaris',[TerlarisController::class,'index'])->middleware(['auth'])->name('terlaris');
Route::get('/terlaris/create',[TerlarisController::class,'create'])->middleware(['auth'])->name('terlaris.create');
Route::post('/terlaris/store',[TerlarisController::class,'store'])->middleware(['auth'])->name('terlaris.store');
Route::get('/terlaris/edit/{id}',[TerlarisController::class,'edit'])->middleware(['auth'])->name('terlaris.edit');
Route::put('/terlaris/update/{id}',[TerlarisController::class,'update'])->middleware(['auth'])->name('terlaris.update');
Route::delete('/terlaris/hapus/{id}',[TerlarisController::class,'hapus'])->middleware(['auth'])->name('terbaru.hapus');


//pesan
Route::post('/pesan/create',[PesanController::class,'create'])->middleware(['auth'])->name('pesan.create');
Route::get('/pesan',[PesanController::class,'index'])->middleware(['auth'])->name('pesan');



Route::get('/tentangtampil',[KumpulController::class,'tentangtampil'])->middleware(['auth'])->name('tentangtampil');
Route::get('/tentangedit/{id}',[KumpulController::class,'tentangedit'])->middleware(['auth'])->name('tentangedit');
Route::put('/tentangupdate/{id}',[KumpulController::class,'tentangupdate'])->middleware(['auth'])->name('tentangupdate');
//baru
Route::get('/baru',[KumpulController::class,'barutampil'])->middleware(['auth'])->name('baru');
Route::get('/baruedit/{id}',[KumpulController::class,'baruedit'])->middleware(['auth'])->name('baruedit');
Route::put('/baruupdate/{id}',[KumpulController::class,'baruupdate'])->middleware(['auth'])->name('baruupdate');
//populer
Route::get('/populer',[KumpulController::class,'populertampil'])->middleware(['auth'])->name('populer');
Route::get('/populeredit/{id}',[KumpulController::class,'populeredit'])->middleware(['auth'])->name('populeredit');
Route::put('/populerupdate/{id}',[KumpulController::class,'populerupdate'])->middleware(['auth'])->name('populerupdate');

require __DIR__.'/auth.php';
