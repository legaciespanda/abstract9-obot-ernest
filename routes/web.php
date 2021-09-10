<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/unverified', [AdminController::class, 'unverified'])->middleware('user')->name('unverified');

//route group for admin
Route::middleware(['auth', 'admin'])->group(function() {
	
	//Route::resource('/admin', AdminController::class)->name('home');
	Route::get('/home', [AdminController::class, 'index'])->name('home');
	Route::post('/admin/user/activate', [AdminController::class, 'activate_user_ajax'])->name('admin.user.activate');
	Route::post('/admin/user/deactivate', [AdminController::class, 'deactivate_user_ajax'])->name('admin.user.deactivate');
	Route::delete('/admin/user/delete', [AdminController::class, 'delete_user_ajax'])->name('admin.user.delete');
	
	
	
	//other routes...
});

//route group for users
Route::middleware(['user', 'auth'])->group(function() {
	
	Route::get('/user', [UserController::class, 'index'])->name('user');
	
	//other routes...
});