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
Route::get('/', [App\Http\Controllers\SubtituloController::class, 'index'])->name('root');
Route::get('/home', [App\Http\Controllers\SubtituloController::class, 'index'])->name('home');
Route::get('/subtitulos', [App\Http\Controllers\SubtituloController::class, 'index'])->name('subs_home');
Route::get('/subtitulo/{id}/detalle', [App\Http\Controllers\SubtituloController::class, 'show_details'])->name('show_details');

Route::get('/usuario/perfil', [App\Http\Controllers\UserController::class, 'show_profile'])->name('show_profile');
Route::get('/usuario/criticas', [App\Http\Controllers\UserController::class, 'show_criticas'])->name('show_criticas');
Route::post('/usuario/perfil/editar', [App\Http\Controllers\UserController::class, 'edit_profile'])->name('edit_profile');
Route::post('/usuario/password/editar', [App\Http\Controllers\UserController::class, 'edit_password'])->name('edit_password');

Auth::routes();
