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
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('');


//backend route

//--------------------- author route -----------------
Route::group(['prefix' => 'author'], function () {
  //home page
  Route::get('home', [App\Http\Controllers\Backend\HomeController::class, 'index'])->name('home');

  //social media
  Route::get('create/media', [App\Http\Controllers\Backend\Social_mediaController::class, 'create'])->name('create/media');
  Route::post('store/media', [App\Http\Controllers\Backend\Social_mediaController::class, 'store'])->name('store/media');
  Route::get('manage/media', [App\Http\Controllers\Backend\Social_mediaController::class, 'index'])->name('manage/media');
  Route::get('edit/media/{id}', [App\Http\Controllers\Backend\Social_mediaController::class,'edit'])->name('edit/media');
  Route::post('update/media/{id}', [App\Http\Controllers\Backend\Social_mediaController::class,'update'])->name('update/media');
  Route::get('delete/media/{id}', [App\Http\Controllers\Backend\Social_mediaController::class,'destroy'])->name('delete/media');

  //company information
  Route::get('create/info', [App\Http\Controllers\Backend\Company_infoController::class, 'create'])->name('create/info');
  Route::post('store/info', [App\Http\Controllers\Backend\Company_infoController::class, 'store'])->name('store/info');
});
