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

Route::get('/jelentkezes', function () {
    return view('jelentkezes');
})->name('jelentkezes');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([AdminMiddleware::class])->group(function(){
    Route::get('/admin/felhasznalok',[FelhasznaloController::class,'lista'])->middleware('auth')->name('admin.felhasznalok');
});

Route::get('/felhasznalok/uj',[FelhasznaloController::class,'create'])->name('ujfelhasznalo');
Route::post('/felhasznalok/uj',[FelhasznaloController::class,'store']);
Route::get('/felhasznalok/modositas/{id}',[FelhasznaloController::class,'edit'])->name('felhasznaloEdit');
Route::post('/felhasznalok/modositas/{id}',[FelhasznaloController::class,'update']);
Route::post('/felhasznalo/modosit', [FelhasznaloController::class, 'modosit'])->name('felhasznalo.modosit');
Route::get('/felhasznalok/torol/{id}', [FelhasznaloController::class, 'confirmDelete'])->name('confirmFelhasznaloDelete');
Route::post('/felhasznalok/torol', [FelhasznaloController::class,'destroy'])->name('felhasznaloDestory');


