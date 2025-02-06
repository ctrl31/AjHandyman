<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;

// Ruta raíz: muestra la PAGINA PRINCIPAL LA RUTA INDEX.HTML es INECESARIA
Route::get('/', [HomeController::class, 'homepage'])->name('homepage');

// Rutas para el área de administración LOGIN DE ADMIN
Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
