<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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
Auth::routes();

Route::middleware(['auth', 'roles:ROLE_ADMIN'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class, 'dashboardAdmin'])
        ->name('admin.dashboard');

    Route::get('admin/form-inscription', [AdminController::class, 'createUserForm'])
        ->name('admin.form-inscription');

    Route::get('admin/form-inscription/{id}', [AdminController::class, 'updateUserForm'])
        ->name('admin.form-inscription.id');

    Route::post('admin/form-inscription', [AdminController::class, 'UserForm']);
    Route::put('admin/form-inscription/{id}', [AdminController::class, 'userForm']);

    Route::get('/admin/switch/{id}', [AdminController::class, 'switchUserAccount'])
        ->name('admin.switchUserAccount');

    Route::get('/admin/delete/{id}', [AdminController::class, 'deleteUserAccount'])
        ->name('admin.deleteUserAccount');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'App\Http\Controllers\Controller@index');

Route::get('user', [UserController::class, 'profilePage'])
    ->name('user.profilePage');

Route::post('user/update}', [UserController::class, 'profilePageUpdate'])
->name('user.profilePageUpdate');

Route::get('user/disabled', [UserController::class, 'profilePageDisabled'])
    ->name('user.profilePageDisabled');





