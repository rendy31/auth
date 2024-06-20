<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Auth::routes(['register'=>false]);

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



// Routes for admin
Route::prefix('admin')->middleware(['auth', 'role'])->group(function () {
    Route::get('/', [DashboardController::class,'index'])->name('admin.index');
    Route::resource('users', UserController::class);
});


// Routes for user
Route::middleware(['auth', 'role'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('user.home');
});