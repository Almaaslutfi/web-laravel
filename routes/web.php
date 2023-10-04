<?php

use App\Http\Controllers\ManagementUserController;
use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


# routing untuk homepage
Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [ManagementUserController::class, 'index']);
//Route::resource('user', 'ManagementUserController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/profile', function(){
    //
})->middleware(CheckAge::class);