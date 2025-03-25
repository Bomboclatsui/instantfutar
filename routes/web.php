<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\FelhasznaloController;


Route::get('/', function () {
    return view('welcome');
})->name('fooldal');

Route::get('/cs_fel', function () {
    return view('cs_fel');
})->name('cs_fel');

Route::post('/felhasznalo/modosit', [FelhasznaloController::class, 'modosit'])->name('felhasznalo.modosit');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([AdminMiddleware::class])->group(function(){
    Route::get('/admin/felhasznalok',[FelhasznaloController::class,'lista'])->middleware('auth')->name('admin.felhasznalok');
});

Route::post('/felhasznalok/torol/{id}', [FelhasznaloController::class, 'torol'])->name('felhasznalo.torol');


