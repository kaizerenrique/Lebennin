<?php

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //permisos
    Route::get('/configuraciones/rolesypermisos', function () {
        return view('configuraciones/rolesypermisos');
    })->name('roles');

    //usuarios
    Route::get('/configuraciones/usuarios', function () {
        return view('configuraciones/usuarios');
    })->name('usuarios');
});



