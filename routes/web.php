<?php

use App\Http\Controllers\bukuController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', [homeController::class,'index'])->middleware(['admin']);
Route::get('/menuUser', [menuController::class,'index'])->middleware(['user']);
Route::get('/menuUser/search', [menuController::class,'search'])->middleware(['user']);
Route::get('/menuUser/detail/{id}',[menuController::class,'detail'])->middleware(['user']);
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::middleware(['user'])->group(function(){
//     Route::get('/menuUser', [menuController::class,'index'])->name('menuUser');
    
// });



Auth::routes();


Route::middleware(['admin'])->group(function(){
    Route::get('/', [homeController::class,'index']);
    Route::get('/search', [bukuController::class,'search']);
    Route::get('/daftarBuku',[bukuController::class,'index'])->name('daftarBuku');

    Route::get('/daftarBuku/add',[bukuController::class,'add']);
    Route::post('/daftarBuku/insert',[bukuController::class,'insert']);

    Route::get('/daftarBuku/delete/{id}',[bukuController::class,'delete']);

    Route::get('/daftarBuku/detail/{id}',[bukuController::class,'detail']);

    Route::get('/daftarBuku/edit/{id}',[bukuController::class,'edit']);
    Route::post('/daftarBuku/update/{id}',[bukuController::class,'update']);
   
});

