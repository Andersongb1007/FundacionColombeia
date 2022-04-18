<?php

use App\Http\Controllers\AlmacenController;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\SeguridadController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsersController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users/show', [UsersController::class,'index']);

Route::get('perfil',[UserController::class,'index'])->name('perfil');

Route::resource('users',UsersController::class);

Route::resource('eventos',EventosController::class);

Route::resource('almacen',AlmacenController::class);

Route::resource('seguridad',SeguridadController::class);