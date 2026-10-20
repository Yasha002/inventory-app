
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/barang', [ItemController::class, 'index'])
    ->name('barang.index');

Route::get('/barang/create', [ItemController::class, 'create'])
    ->name('barang.create');

Route::post('/barang', [ItemController::class, 'store'])
    ->name('barang.store');

Route::delete('/barang/{item}', [ItemController::class, 'destroy'])
    ->name('barang.destroy');

Route::get('/barang/{item}/edit', [ItemController::class, 'edit'])
    ->name('barang.edit');

Route::put('/barang/{item}', [ItemController::class, 'update'])
    ->name('barang.update');

