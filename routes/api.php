<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/users', UserController::class);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);

Route::post('/primo/{number}', function(Request $request, $number) {
    for ($i = 2; $i < $number; $i++){
        if ($number % $i == 0) {
            return response()->json(['verify' => false]);
        }
    }
    return response()->json(['verify' => true]);
});
