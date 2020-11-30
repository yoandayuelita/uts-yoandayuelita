<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;




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

Route::get('/', function(){return view('welcome');});

Route::resource('client', ClientController::class);


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'store']);

Route::prefix('admin')->middleware('auth')->group(function(){
	/*HOME*/
	Route::resource('beranda', HomeController::class);
	Route::resource('komentar', KomentarController::class);
	Route::resource('artikel', ArtikelController::class);
	Route::resource('user', UserController::class);
});


