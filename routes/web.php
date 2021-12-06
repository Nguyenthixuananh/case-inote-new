<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SocialController;
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

Route::prefix('/admin')->group(function () {
    Route::get('/login', [AuthController::class, "showFormLogin"])->name("admin.showFormLogin");
    Route::post('/login', [AuthController::class, "login"])->name("admin.login");
    Route::get('/logout', [AuthController::class, "logout"])->name("admin.logout");
    Route::get('/register', [AuthController::class, 'showFormRegister'])->name("admin.showFormRegister");
    Route::post('/register', [AuthController::class, 'register'])->name("admin.register");

    Route::resource('notes', \App\Http\Controllers\NoteController::class)->middleware('auth');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/auth/redirect/{provider}', [SocialController::class,'redirect'])->name('login');

Route::get('/callback/{provider}', [SocialController::class, 'callback']);
