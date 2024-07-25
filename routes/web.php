<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


//Product Routes

Route::get('/', [ProductController::class, 'index']);
Route::get('/create', [ProductController::class, 'create']);
Route::post('/products', [ProductController::class, 'store']);
Route::post('/', [ProductController::class, 'store']); #ver isso para adicionar no carrinho

//Cart Routes

Route::get('/cart', [CartController::class, 'index']);
Route::get('/order', [CartController::class, 'index']);

//Autogen Jetstream/Livewire

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
