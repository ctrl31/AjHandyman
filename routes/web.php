<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;

// Ruta raíz: muestra la PAGINA PRINCIPAL LA RUTA INDEX.HTML es INECESARIA
Route::get('/', [HomeController::class, 'homepage'])->name('homepage');

// Rutas para el área de administración LOGIN DE ADMIN
Route::get('/home', [AdminController::class, 'index'])->name('home');
Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

//RUTAS PARA SERVICES
Route:: get('/projects',[ServiceController::class, 'projects'])->name('projects');
Route:: get('/plumbing',[ServiceController::class, 'plumbing'])->name('plumbing');
Route:: get('/outside',[ServiceController::class, 'outside'])->name('outside');
Route:: get('/inside',[ServiceController::class, 'inside'])->name('inside');
Route:: get('/electricist',[ServiceController::class, 'electricist'])->name('electricist');
Route:: get('/cleaning',[ServiceController::class, 'cleaning'])->name('cleaning');

