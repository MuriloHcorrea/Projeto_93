<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\RacaController;

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

/**
 * --------------------------
 * | cliente
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

//             Route::get('/racas/{raca}', 'RacaController@show')->name('raca.show');
// Route::get('/racas/{raca}/edit', 'RacaController@edit')->name('raca.edit');
// Route::post('/racas/{raca}/update', 'RacaController@update')->name('raca.update');
// Route::post('/racas/{raca}/destroy', 'RacaController@destroy')->name('raca.destroy');
        });


require __DIR__.'/auth.php';
