<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
    return view('pages.index');
})->name('accueil');

Route::get('services', function () {
    return view('pages.services');
})->name('services');

Route::get('detail-service', function () {
    return view('pages.serviceDetail');
})->name('detailService');

Route::get('faire-une-demande', function () {
    return view('pages.demande');
})->name('demande');

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('recis', function () {
    return view('pages.recis');
})->name('recis');

Route::get('recis/details', function () {
    return view('pages.recis');
})->name('details');

Route::get('recis/partenaires', function () {
    return view('pages.recis');
})->name('partenaires');

Route::get('recis/executif', function () {
    return view('pages.recis');
})->name('executif');

Route::get('recis/organisation', function () {
    return view('pages.recis');
})->name('organisation');

Route::get('recis/archives', function () {
    return view('pages.recis');
})->name('archives');

Route::get('recis/autres', function () {
    return view('pages.recis');
})->name('autres');

Route::get('submission/{id?}',[Controller::class, 'submission'])->name('submission');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::group([
    'middleware' => 'App\Http\Middleware\Authenticate',
], function () {

    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'home'])->name('admin');

    Route::get('admin/details', function () {
        return view('pages.sousPage.detail');
    })->name('detail');
    
    Route::get('admin/bilans', function () {
        return view('pages.sousPage.bilan');
    })->name('bilan');

    Route::get('admin/foire', function () {
        return view('pages.sousPage.foire');
    })->name('foire');

    Route::get('admin/partenaire', function () {
        return view('pages.sousPage.partenaire');
    })->name('partenaire');

    Route::get('admin/photo', function () {
        return view('pages.sousPage.photo');
    })->name('a.photo');

    Route::get('admin/ressource', function () {
        return view('pages.sousPage.ressource');
    })->name('ressource');

    Route::get('admin/theme', function () {
        return view('pages.sousPage.theme');
    })->name('theme');

    Route::get('admin/even', function () {
        return view('pages.sousPage.evenement');
    })->name('even');

    Route::get('admin/film', function () {
        return view('pages.sousPage.film');
    })->name('film');

    Route::get('admin/laureat', function () {
        return view('pages.sousPage.laureat');
    })->name('laureat');

});
