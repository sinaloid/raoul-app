<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
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




Route::post('/envoi-message', [Controller::class, 'createMessage'])->name('createMessage');

Route::get('/', [Controller::class, 'index'])->name('accueil');
Route::get('/nos-services', [Controller::class, 'services'])->name('nosServices');
Route::get('/detail-service/{slug}', [Controller::class, 'detailService'])->name('detailService');
Route::get('faire-une-demande', function () {
    return view('pages.demande');
})->name('demande');

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');




Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::group([
    'middleware' => 'App\Http\Middleware\Authenticate',
], function () {

    Route::get('/liste-demandes', [HomeController::class, 'home'])->name('admin');

    Route::post('/create-services', [HomeController::class, 'createService'])->name('createService');
    Route::get('/liste-services', [HomeController::class, 'service'])->name('service');
    Route::delete('/delete-services/{id}', [HomeController::class, 'deleteService'])->name('deleteService');


    Route::get('/liste-messages', [HomeController::class, 'message'])->name('message');
    Route::delete('/delete-messages/{id}', [HomeController::class, 'deleteMessage'])->name('deleteMessage');

});
