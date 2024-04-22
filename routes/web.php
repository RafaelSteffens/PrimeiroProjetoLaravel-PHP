<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Grupo de rotas protegidas pelo middleware de autenticação
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    Route::get('/home/create', [App\Http\Controllers\HomeController::class,'create'])->name('home.create');
    Route::post('/', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');
    Route::get('/{id}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->where('id,','[0-9]+')->name('home.edit');
    Route::put('/{id}', [App\Http\Controllers\HomeController::class, 'update'])->where('id,','[0-9]+')->name('home.uptade');
    Route::delete('/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->where('id,','[0-9]+')->name('home.destroy');

  
});
Route::fallback(function () {
    return "Erro!";
});
