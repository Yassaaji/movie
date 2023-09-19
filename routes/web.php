<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NowplayingController;
use App\Http\Controllers\WelcomeController;
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


// Register




//user->Home


// Route untuk Login
Route::get('/login',[LoginController::class , 'showLoginForm'])->name('login');
Route::post('/authenticate',[LoginController::class , 'authenticate'])->name('authenticate');

// Route untuk register
Route::get('/register',[RegisterController::class , 'showRegisterForm'])->name('register');
Route::post('/insertRegister',[RegisterController::class , 'insertRegister'])->name('insertRegister');

// Route untuk Logout
Route::post('/logout',[LoginController::class, 'logout'])->name('logout');

// Halaman
Route::get('/nowplaying',[NowplayingController::class,'index'])->name('nowplaying');


    // Route untuk login
        // Route untuk halaman setelah login

        // Route::get('/nowplaying', [App\Http\Controllers\NowplayingController::class, 'index'])->name('nowplaying');
        // Route::get('dashboard', 'UserController@dashboard')->name('dashboard');

            // Route untuk halaman admin
            Route::get('/home',[HomeController::class,'index'])->name('home');
            Route::resource('/admin', AdminController::class);



// Route grup untuk user yang sudah login

// Route grup untuk admin yang sudah login

// Route untuk halaman landing page
// Route::middleware('guest')->get('/', 'HomeController@index')->name('landing');
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/nowplaying', function () {
//     return view('nowplaying');
// });

Route::get('/comingsoon', function () {
    return view('comingsoon');
});

Route::get('/detailfilm', function () {
    return view('detailfilm');
});

Route::get('/profile',function (){
    return view('profile');
});
Route::get('/editprofil',function (){
    return view('editprofil');
});






// Route::prefix('admin')->middleware(['auth', 'isAdmin'])->namespace('Admin')->group(function () {
//     // Route::get('/dashboard', 'DashboardController@index');
//     // Route::get('/users', 'UserController@index');
//     // Route::post('/users', 'UserController@store');
//     // ... tambahkan route admin lainnya di sini
// });



// Route::middleware(['auth'])->group(function () {
//     //Route untuk users
// });
// Route::group(['middeware'=>'isAdmin','prefix'=>'admin','namespace'=>'Admin'],function(){
//     // Route untuk admin
//     Route::get('/home',[HomeController::class,'index'])->name('home');
//     Route::resource('/admin', AdminController::class);

// });


// Route::middleware(['isAdmin'])->group(function () {

// });


// Auth::routes();



// Route::middleware(['guest'])->group(function() {

//     Route::get('/',[LoginController::class,'index'])->name('login');
//     Route::post('/',[LoginController::class,'login']);

// });



Route::get('/home', function(){
    return redirect('/admin');
});



