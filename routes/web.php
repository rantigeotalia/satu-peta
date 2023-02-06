<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PublicServiceController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\GalleryController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('sliders', SliderController::class)->middleware('auth');

Route::resource('about', AboutController::class)->middleware('auth');

Route::resource('news', NewsController::class)->middleware('auth');

Route::resource('faq', FaqController::class)->middleware('auth');

Route::resource('galleries', GalleryController::class)->middleware('auth');

Route::resource('public_services', PublicServiceController::class)->middleware('auth');


