<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\VuController::class, 'index'])->name('accueil');
Route::get('A-propos', [App\Http\Controllers\VuController::class, 'ap'])->name('ap');
Route::get('/Pourquoi_nous', [App\Http\Controllers\VuController::class, 'pq'])->name('pq');
Route::get('/Notre_equipe', [App\Http\Controllers\VuController::class, 'ne'])->name('ne');
Route::get('/Nos_developpeur', [App\Http\Controllers\VuController::class, 'nd'])->name('nd');
Route::get('/Nos_developpeur1', [App\Http\Controllers\VuController::class, 'nd1'])->name('nd1');
Route::get('/Faq', [App\Http\Controllers\VuController::class, 'fa'])->name('fa');
Route::get('/It_service', [App\Http\Controllers\VuController::class, 'it'])->name('it');
Route::get('/Developpement_web', [App\Http\Controllers\VuController::class, 'dw'])->name('dw');
Route::get('/Developpement_mobile', [App\Http\Controllers\VuController::class, 'dm'])->name('dm');
Route::get('/Portfolio', [App\Http\Controllers\VuController::class, 'po'])->name('po');
Route::get('/Nos_realisation', [App\Http\Controllers\VuController::class, 'no'])->name('no');
Route::get('/Blog', [App\Http\Controllers\VuController::class, 'bl'])->name('bl');
Route::get('/Contact', [App\Http\Controllers\VuController::class, 'co'])->name('co');



Route::post('/Contactstore', [App\Http\Controllers\ContnewsController::class, 'storecontact'])->name('contact.storecontact');
Route::post('/Newsstore', [App\Http\Controllers\ContnewsController::class, 'storenews'])->name('news.storenews');
