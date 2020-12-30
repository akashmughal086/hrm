<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;

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
Auth::routes();
Route::get('/profile',[App\Http\Controllers\HomeController::class,'profile'])->name('profile');
Route::get('/profile/edit',[App\Http\Controllers\HomeController::class,'profileEdit'])->name('profile.edit');
Route::put('/profile/update',[App\Http\Controllers\HomeController::class,'profileUpdate'])->name('profile.update');
Route::get('/changepassword', [App\Http\Controllers\HomeController::class,'changePasswordForm'])->name('profile.changepassword');
Route::put('/profile/changepassword',[App\Http\Controllers\HomeController::class,'changePassword'])->name('profile.changepassword');


Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/teacher', [App\Http\Controllers\AdminController::class, 'teacher']);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);
Route::resource('permissions',PermissionController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
