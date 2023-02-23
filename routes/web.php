<?php

use Illuminate\Support\Facades\Route;

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

Route::get('welcome', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// frontend route

//home route
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('index');
Route::get('/contact', [App\Http\Controllers\Frontend\HomeController::class, 'contact'])->name('contact');
Route::get('/services', [App\Http\Controllers\Frontend\HomeController::class, 'services'])->name('services');
Route::get('/mission', [App\Http\Controllers\Frontend\HomeController::class, 'mission'])->name('mission');
Route::get('/vission', [App\Http\Controllers\Frontend\HomeController::class, 'vission'])->name('vission');
Route::get('/team_members', [App\Http\Controllers\Frontend\HomeController::class, 'team_members'])->name('team_members');
