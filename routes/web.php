<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EscolasController;


Route::get('/', [EscolasController::class, 'index'])->name('escolas.index');

Route::get('/create', [EscolasController::class, 'create'])->name('escolas.create');

Route::post('/store', [EscolasController::class, 'store'])->name('escolas.store');

Route::get('/edit/{id}', [EscolasController::class, 'edit'])->name('escolas.edit');

Route::put('/update/{id}', [EscolasController::class, 'update'])->name('escolas.update'); 

Route::get('/show/{id}', [EscolasController::class, 'show'])->name('escolas.show');

Route::delete('/destroy/{id}', [EscolasController::class, 'destroy'])->name('escolas.destroy');

