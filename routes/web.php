<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DriverController;

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

Route::get('/', [SiteController::class, 'home']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/blog', [SiteController::class, 'blog']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::get('/price', [SiteController::class, 'price']);
Route::get('/service', [SiteController::class, 'service']);
Route::get('/single', [SiteController::class, 'single']);
Route::get('/join-our-team', [SiteController::class, 'joinTeam']);
Route::get('/join-now', [SiteController::class, 'joinNow'])->name('join.now');
Route::resource('driver', DriverController::class);
Route::post('/send-contact', [ContactController::class, 'send'])->name('contact.send');