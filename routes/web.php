<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NowplayingController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Account\PasswordController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TicketController;

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

    // Route untuk login
        // Route untuk halaman setelah login

        // Route::get('/nowplaying', [App\Http\Controllers\NowplayingController::class, 'index'])->name('nowplaying');
        // Route::get('dashboard', 'UserController@dashboard')->name('dashboard');

            // Route untuk halaman admin
// Route::get('/home',[HomeController::class,'index'])->name('home');
Route::resource('/admin', AdminController::class);
Route::get('/tambahfilm',[FilmController::class,'create'])->name('tambahfilm');
Route::get('/daftarfilm',[FilmController::class, 'daftarFilm'])->name('daftarfilm');


Route::post('/uploadfilm',[FilmController::class,'store'])->name('uploadfilm');
Route::put('/proseseditfilm/{id}',[FilmController::class,'update'])->name('prosesEditFilm');
Route::get('/edit-film/{id}',[FilmController::class,'edit'])->name('edit-film');
// Route::post('/hapusfilm/{id}',[FilmController::class,'destroy'])->name('hapusfilm');
Route::resource('film', FilmController::class);
Route::resource('tiket', TicketController::class);
// Route::get('/tes', [App\Http\Controllers\NowplayingController::class, 'index'])->name('tes');
// Route::get('/create-nowplaying', [App\Http\Controllers\CreateNowplayingController::class, 'create'])->name('create-nowplaying');



// Route::middleware(['guest'])->group(function() {

// Route grup untuk admin yang sudah login

// Route untuk halaman landing page
// Route::middleware('guest')->get('/', 'HomeController@index')->name('landing');
Route::get('/',[PageController::class,'welcome']);
Route::get('/nowplaying',[PageController::class,'nowplaying'])->name('nowplaying');
// Route::get('/profile',[ProfileController::class,'index'])->name('profile');
Route::put('/edit-profile',[ProfileController::class,'edit'])->name('edit-profile');
Route::resource('/profile',ProfileController::class);
// Route::put('/proses-edit-profile/{user}',[ProfileController::class,'update'])->name('proses-edit-profile');

// Route::get('/nowplaying', function () {
//     return view('nowplaying');
// });


Route::get('/comingsoon', function () {
    return view('comingsoon');
});

Route::resource('pesanan',PesananController::class);
// Route::get('/detailfilm', function () {
//     return view('detailfilm');
// });

// Route::get('/profile',function (){
//     return view('profile');
// });


Route::get('/datatiket',function(){
    return view('datatiket');
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



// Route::get('/home', function(){
//     return redirect('/admin');
// });


// Route::get('/ticket', function(){
//     return view('order-ticket');
// });
Route::get('/konfirmasi-ticket', function(){
    return view('admin.konfirmasi-ticket');
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
