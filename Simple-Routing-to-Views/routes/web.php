<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GreetController;
use App\Http\Controllers\ItemsController;

Route::get('/', function () {
    return 'Hello, Laravel!';
});

Route::get('/greet', [GreetController::class, 'showGreeting']);

Route::resource('items', ItemsController::class);

//Route::get('/items/create', [ItemsController::class, 'create'])->name('items.create');
//Route::get('/items', [ItemsController::class, 'index'])->name('items.index');
//Route::post('/items', [ItemsController::class, 'store'])->name('items.store');
//Route::get('/items/{id}/edit', [ItemsController::class, 'edit'])->name('items.edit');
//Route::put('/items/{id}', [ItemsController::class, 'update'])->name('items.update');
//Route::delete('/items/{id}', [ItemsController::class, 'destroy'])->name('items.destroy');
//Route::get('/items/{id}', [ItemsController::class, 'show'])->name('items.show');