<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\LocalidadesController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CompraSController;

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


Route::resource('eventos', EventosController::class);
Route::resource('localidades', LocalidadesController::class);

Route::resource('boletas', App\Http\Controllers\BoletaController::class);
Route::resource('artistas', App\Http\Controllers\ArtistaController::class);
Route::get('/buscar-eventos', [App\Http\Controllers\EventoController::class, 'buscar'])->name('eventos.buscar');


Route::resource('usuarios', UsuarioController::class);
Route::get('/compras/historial/{id}', [CompraController::class, 'historial'])->name('compras.historial');
require __DIR__.'/auth.php';
