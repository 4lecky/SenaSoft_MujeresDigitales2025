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

Route::resource('boletas', App\Http\Controllers\BoletasController::class);
Route::resource('artistas', App\Http\Controllers\ArtistaController::class);
Route::get('/buscar-eventos', [App\Http\Controllers\EventosController::class, 'buscar'])->name('eventos.buscar');


// Route::resource('usuarios', UsuarioController::class);
Route::get('/compras/historial/{id}', [ComprasController::class, 'historial'])->name('compras.historial');

Route::middleware(['auth'])->group(function () {

    // Administrador
    Route::get('/administrador/administardor', function(){
        return view('administrador.index'); 
    })->name('administrador.index');

    // Usuario
    Route::get('/usuarios/usuario', function(){
        return view('usuario.index'); 
    })->name('usuario.index');

    // Comprador
    Route::get('/compradores/comprador', function(){
        return view('comprador.index'); 
    })->name('comprador.index');

});
require __DIR__.'/auth.php';
