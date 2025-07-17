<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Htpp\Controllers\ProductoController;
use App\Htpp\Controllers\SubcategoriaController;
use App\Htpp\Controller\UserController;
use App\Models\Subcategoria;

//resirije a la raiz al login

Route::get('/', function(){
    return redirect()->route('login');

});

Route::get('/', function(){
    return view('welcome');

});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::Resource('categorias', CategoriaController::class);
Route::Resource('subcategorias', SubcategoriaController::class);
Route::Resource('productos', ProductoController::class);
Route::Resource('usuarios', UserController::class);

Route::middleware('auth', 'admin')->group(function () {
    Route::resource('usuarios', UserController::class);
});

require __DIR__ . '/auth.php';