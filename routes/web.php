<?php



use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{

    PetController
};







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

Route::prefix('pet-animal')
    ->controller(PetController::class)
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'index')->name('pet.index');
        Route::get('/show/{id}', 'show')->name('pet.show');
        Route::get('/novo', 'create')->name('pet.create');
        Route::get('/editar/{id}', 'edit')->name('pet.edit');
        Route::post('cadastrar', 'store')->name('pet.store');
        Route::post('excluir/{id}', 'destroy')->name('pet.destroy');
    });
