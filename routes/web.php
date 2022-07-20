<?php

use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\KursusController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class, 'home'])->name('home');


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');

    Route::prefix('admin/dashboard')->name('admin.')->group(function(){
        Route::resource('/kursus',KursusController::class);
     });

     Route::prefix('admin/dashboard')->name('admin.')->group(function(){
        Route::resource('/jadwal',JadwalController::class);
     });

     Route::prefix('admin/dashboard')->name('admin.')->group(function(){
        Route::resource('/user',UserController::class);
     });

});

require __DIR__.'/auth.php';
