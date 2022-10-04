<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

Route::get('/', 'App\Http\Controllers\Controller@index');

Route::get('user', [UserController::class, 'profilePage'])
    ->name('user.profilePage');

Route::post('user/update}', [UserController::class, 'profilePageUpdate'])
->name('user.profilePageUpdate');

Route::get('user/disabled', [UserController::class, 'profilePageDisabled'])
    ->name('user.profilePageDisabled');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
