<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/categoria',CategoriasController::class);
Route::apiResource('/producto',ProductosController::class);
