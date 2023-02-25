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
  Route::get('manage/info', [App\Http\Controllers\Backend\Company_infoController::class, 'index'])->name('manage/info');
  Route::get('edit/info/{id}', [App\Http\Controllers\Backend\Company_infoController::class, 'edit'])->name('edit/info');
  Route::post('update/info/{id}', [App\Http\Controllers\Backend\Company_infoController::class, 'update'])->name('update/info');
  Route::get('delete/info/{id}', [App\Http\Controllers\Backend\Company_infoController::class, 'destroy'])->name('delete/info');

  //slider
  Route::get('create/slider', [App\Http\Controllers\Backend\SliderController::class, 'create'])->name('create/slider');
  Route::post('store/slider', [App\Http\Controllers\Backend\SliderController::class, 'store'])->name('store/slider');
  Route::get('manage/slider', [App\Http\Controllers\Backend\SliderController::class, 'index'])->name('manage/slider');
  Route::get('edit/slider/{id}', [App\Http\Controllers\Backend\SliderController::class, 'edit'])->name('edit/slider');
  Route::post('update/slider/{id}', [App\Http\Controllers\Backend\SliderController::class, 'update'])->name('update/slider');
  Route::get('delete/slider/{id}', [App\Http\Controllers\Backend\SliderController::class, 'destroy'])->name('delete/slider');

  //company achievement
  Route::get('create/achiev', [App\Http\Controllers\Backend\Company_achievementController::class, 'create'])->name('create/achiev');
  Route::post('store/achiev', [App\Http\Controllers\Backend\Company_achievementController::class, 'store'])->name('store/achiev');
  Route::get('manage/achiev', [App\Http\Controllers\Backend\Company_achievementController::class, 'index'])->name('manage/achiev');
  Route::get('edit/achiev/{id}', [App\Http\Controllers\Backend\Company_achievementController::class, 'edit'])->name('edit/achiev');
  Route::post('update/achiev/{id}', [App\Http\Controllers\Backend\Company_achievementController::class, 'update'])->name('update/achiev');
  Route::get('delete/achiev/{id}', [App\Http\Controllers\Backend\Company_achievementController::class, 'destroy'])->name('delete/achiev');

  //about us
  Route::get('create/about', [App\Http\Controllers\Backend\About_usController::class, 'create'])->name('create/about');
  Route::post('store/about', [App\Http\Controllers\Backend\About_usController::class, 'store'])->name('store/about');
  Route::get('manage/about', [App\Http\Controllers\Backend\About_usController::class, 'index'])->name('manage/about');
  Route::get('edit/about/{id}', [App\Http\Controllers\Backend\About_usController::class, 'edit'])->name('edit/about');
  Route::post('update/about/{id}', [App\Http\Controllers\Backend\About_usController::class, 'update'])->name('update/about');
  Route::get('delete/about/{id}', [App\Http\Controllers\Backend\About_usController::class, 'destroy'])->name('delete/about');

  //Our services
  Route::get('create/service', [App\Http\Controllers\Backend\Our_serviceController::class, 'create'])->name('create/service');
  Route::post('store/service', [App\Http\Controllers\Backend\Our_serviceController::class, 'store'])->name('store/service');
});
