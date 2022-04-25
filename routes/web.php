<?php

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
    return view('index');
})->name('inicio');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/ecoponto', function () {
    return view('site.ecoponto');
})->name('site.ecoponto');

Route::get('/contato', function () {
    return view('site.contato');
})->name('site.contato');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('usuario', UsuarioController::class);

//PRECISA AUTENTICAR NO SISTEMA E SER ADMIN
//Route::resource('usuario', UserController::class)->middleware(['auth','admin']);

/*Route::get('/profile', function () {
    return view('profile.index');
})->name('profile')->middleware(['auth']);

//Route::get('/change-password', [UserController::class, 'changePassword'])->name('change-password')->middleware(['auth']);

//Route::post('/change-password', [UserController::class, 'updatePassword'])->name('update-password')->middleware(['auth']);

/*Route::get('/teste', function () {
    return view('');
})->name('teste');*/