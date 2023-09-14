<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/nowplaying', function () {
    return view('nowplaying');
});

Route::get('/comingsoon', function () {
    return view('comingsoon');
});

Route::get('/detailfilm', function () {
    return view('detailfilm');
});

Route::get('/profile',function (){
    return view('profile');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('admin', AdminController::class)->middleware('is_admin');
