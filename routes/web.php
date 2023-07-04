<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StokFFController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StokJubelioController;

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
    // Route::get('login', 'LoginController@showLoginForm');
    // Route::post('login', 'LoginController@login');
});

Route::group([ "middleware" => ['auth:sanctum', config('jetstream.auth_session'), 'verified'] ], function() {
    Route::get('/dashboard', [ DashboardController::class, "index" ])->name('dashboard');
    // Route::get('/store-json', [ DashboardController::class, "getstok" ])->name('dashboard');
    // Route::get('/getwarehouse', [ DashboardController::class, "getwarehouse" ])->name('dashboard');


    // Route::get('/StokJubelio', [ StokJubelioController::class, "index" ])->name('stokjubelio');
    // Route::get('/StokFF', [ StokFFController::class, "index" ])->name('stokff');
    // Route::get('/storeff', [ StokFFController::class, "store" ]);

    Route::get('/user', [ UserController::class, "index" ])->name('user');
    Route::view('/user/new', "pages.user.user-new")->name('user.new');
    Route::view('/user/edit/{userId}', "pages.user.user-edit")->name('user.edit');
});
