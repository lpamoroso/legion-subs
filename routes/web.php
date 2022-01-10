<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('/', [App\Http\Controllers\SubtituloController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\SubtituloController::class, 'index'])->name('home');
Route::get('/subtitulos', [App\Http\Controllers\SubtituloController::class, 'index'])->name('home');

Route::get('/usuario/perfil', [App\Http\Controllers\UserController::class, 'show_profile'])->name('show_profile');
Route::post('/usuario/perfil/editar', [App\Http\Controllers\UserController::class, 'edit_profile'])->name('edit_profile');

Auth::routes();
