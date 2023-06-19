<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\UserController;
use App\Http\controllers\DashboardController;
use App\Http\controllers\LoginController;
use App\Http\controllers\ProductController;
use App\Http\controllers\HomeController;
use App\Http\Controllers\SearchController;





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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('loginuser', [LoginController::class, 'loginuser'])->name('loginuser');

Route::get('search', [SearchController::class, 'search'])->name('search');



Route::group(['middleware'=>'auth' , 'prefix'], function(){
    
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('user', UserController::class);
    Route::resource('product', ProductController::class);
    
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    
    
});
