<?php
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategiaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;

Route::apiResource('categorias',CategoriaController::class);
Route::apiResource('subcategorias',SubcategiaController::class);
Route::apliResorce('productoss',ProductoController::class);
Route::apiResource('usuarios',UserController::class);