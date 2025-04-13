<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\FelhasznaloController;
use App\Http\Controllers\FutarController;

Route::get('/', function () {
    return view('welcome');
})->name('fooldal');

Route::get('/cs_fel', function () {
    return view('cs_fel');
})->name('cs_fel');

Route::get('/jelentkezes', function () {
    return view('jelentkezes');
})->name('jelentkezes');

Route::get('/futarokCard', function () {
    return view('futarokCard');
})->name('futarokCard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([AdminMiddleware::class])->group(function(){
    Route::get('/admin/felhasznalok',[FelhasznaloController::class,'lista'])->middleware('auth')->name('admin.felhasznalok');
    Route::get('/admin/futarok', [FutarController::class, 'futarLista'])->middleware('auth')->name('admin.futarok');
});



Route::get('/felhasznalok/uj',[FelhasznaloController::class,'create'])->name('ujfelhasznalo');
Route::post('/felhasznalok/uj',[FelhasznaloController::class,'store']);
Route::get('/felhasznalok/modos itas/{id}',[FelhasznaloController::class,'edit'])->name('felhasznaloEdit');
Route::post('/felhasznalok/modositas/{id}',[FelhasznaloController::class,'update']);
Route::post('/felhasznalo/modosit', [FelhasznaloController::class, 'modosit'])->name('felhasznalo.modosit');
Route::get('/felhasznalok/torol/{id}', [FelhasznaloController::class, 'confirmDelete'])->name('confirmFelhasznaloDelete');
Route::post('/felhasznalok/torol', [FelhasznaloController::class,'destroy'])->name('felhasznaloDestory');

Route::post('/futarok/uj',[FutarController::class,'store'])->name('ujFutar');

Route::get('/admin/futarok', [FutarController::class, 'lista'])->name('admin.futarok');
Route::get('/admin/futarok/edit/{id}', [FutarController::class, 'edit'])->name('admin.futarok.edit');
Route::post('/admin/futarok/edit/{id}', [FutarController::class, 'update'])->name('admin.futarok.update');
Route::get('/admin/futarok/delete/{id}', [FutarController::class, 'confirmDelete'])->name('confirmFutarDelete');
Route::post('/admin/futarok/delete', [FutarController::class, 'destroy'])->name('futarokDestory');