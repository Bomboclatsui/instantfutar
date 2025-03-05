<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\jelentkezesekController;
use App\Http\Controllers\rendelesekController;
use App\Http\Controllers\szallitasokController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




// Főoldal
Route::get('/', function () {
    return view('home');
});

// Autentikáció
Route::get('/bejelentkezes', [AuthController::class, 'showLoginForm']);
Route::post('/bejelentkezes', [AuthController::class, 'login']);
Route::get('/regisztracio', [AuthController::class, 'showRegisterForm']);
Route::post('/regisztracio', [AuthController::class, 'register']);
Route::get('/kijelentkezes', [AuthController::class, 'logout']);

// Futár jelentkezés
Route::get('/jelentkezes', [ApplicationController::class, 'showApplicationForm']);
Route::post('/jelentkezes', [ApplicationController::class, 'submitApplication']);

// Rendelések
Route::get('/rendelesek', [OrderController::class, 'index']);
Route::get('/rendeles/{order_id}', [OrderController::class, 'show']);
Route::get('/rendeles/uj', [OrderController::class, 'create']);
Route::post('/rendeles/uj', [OrderController::class, 'store']);
Route::get('/rendeles/modositas/{order_id}', [OrderController::class, 'edit']);
Route::post('/rendeles/modositas/{order_id}', [OrderController::class, 'update']);
Route::post('/rendeles/torles', [OrderController::class, 'destroy']);

// Kiszállítások
Route::get('/kiszallitasok', [DeliveryController::class, 'index']);
Route::get('/kiszallitas/{delivery_id}', [DeliveryController::class, 'show']);
Route::get('/kiszallitas/uj', [DeliveryController::class, 'create']);
Route::post('/kiszallitas/uj', [DeliveryController::class, 'store']);
Route::get('/kiszallitas/modositas/{delivery_id}', [DeliveryController::class, 'edit']);
Route::post('/kiszallitas/modositas/{delivery_id}', [DeliveryController::class, 'update']);
Route::post('/kiszallitas/torles', [DeliveryController::class, 'destroy']);

