<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProcurarController;
use App\Http\Controllers\ServicosController;


Route::get('/', function () {
    return view('home');
});

Route::get('/Descobrir', [HomeController::class, 'home'])->name('home');
Route::get('/Procurar', [ProcurarController::class, 'procurar'])->name('procurar');
Route::get('/Servicos', [ServicosController::class, 'servicos'])->name('servicos');
