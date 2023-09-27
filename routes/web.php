<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;
use GuzzleHttp\Exception\ClientException;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/cliente', function () {
    return redirect()->route('cliente.index');
})->middleware(['auth', 'verified'])->name('cliente');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');





/**
 * --------------------------
 * | Lancamentos
 * | 25-08-2023
 * --------------------------
 */
 Route::prefix('cliente')
 ->controller(ClienteController::class)
 ->middleware('auth')
 ->group(function () {
     Route::get('/', 'index')
         ->name('cliente.index');
     Route::get('/novo', 'create')
         ->name('cliente.create');
     Route::get('/editar/{id}', 'edit')
         ->name('cliente.edit');
     Route::get('exibir/{id}', 'show')
         ->name('cliente.show');


     Route::post('cadastrar', 'store')
         ->name('cliente.store');
     Route::post('atualizar/{id}', 'update')
         ->name('cliente.update');
     Route::post('excluir/{id}', 'destroy')
         ->name('cliente.destroy');

 });

























Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
