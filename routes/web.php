<?php

use App\Http\Controllers\AdocaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RacaController;
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
 * | cliente
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



/**
 * --------------------------
 * | Adoção
 * --------------------------
 */


 Route::prefix('adocao')
 ->controller(AdocaoController::class)
 ->middleware('auth')
 ->group(function () {
     Route::get('/', 'index')
         ->name('adocao.index');
     Route::get('/novo', 'create')
         ->name('adocao.create');
     Route::get('/editar/{id}', 'edit')
         ->name('adocao.edit');
     Route::get('exibir/{id}', 'show')
         ->name('adocao.show');


     Route::post('cadastrar', 'store')
         ->name('adocao.store');
     Route::post('atualizar/{id}', 'update')
         ->name('adocao.update');
     Route::post('excluir/{id}', 'destroy')
         ->name('adocao.destroy');


        });



/**
 * --------------------------
 * | Pets
 * --------------------------
 */

 Route::prefix('pet')
    ->controller(PetController::class)
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'index')
            ->name('pet.index');
        Route::get('/novo', 'create')
            ->name('pet.create');
        Route::get('/editar/{id}', 'edit')
            ->name('pet.edit');
        Route::get('exibir/{id}', 'show')
            ->name('pet.show');
        Route::post('cadastrar', 'store')
            ->name('pet.store');
        Route::post('atualizar/{id}', 'update')
            ->name('pet.update');
        Route::post('excluir/{id}', 'destroy')
            ->name('pet.destroy');
        });


        Route::prefix('raca')
        ->controller(RacaController::class)
        ->middleware('auth')
        ->group(function () {
             Route::get('/', 'index')
                 ->name('raca.index');
             Route::get('/novo', 'create')
                 ->name('raca.create');
             Route::get('/editar/{id}', 'edit')
                 ->name('raca.edit');
             Route::get('exibir/{id}', 'show')
                 ->name('raca.show');
             Route::post('cadastrar', 'store')
                 ->name('raca.store');
             Route::post('atualizar/{id}', 'update')
                 ->name('raca.update');
             Route::post('excluir/{id}', 'destroy')
                 ->name('raca.destroy');

                });








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
