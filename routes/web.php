<?php

use App\Http\Controllers\AliasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('aliases')->middleware(['auth'])->group(function () {
    Route::get('/', [AliasController::class, 'index'])->name('aliases.index');
    Route::post('/', [AliasController::class, 'store'])->name('aliases.store');
    Route::get('create', [AliasController::class, 'create'])->name('aliases.create');
    Route::get('{alias}', [AliasController::class, 'show'])->name('aliases.show');
    Route::get('{alias}/edit', [AliasController::class, 'edit'])->name('aliases.edit');
    Route::get('{alias}/delete', [AliasController::class, 'destroy'])->name('aliases.destroy');
    Route::get('{alias}/burn', [AliasController::class, 'burn'])->name('aliases.burn');
    Route::match(['PUT', 'PATCH'], '{photo}', [AliasController::class, 'update'])->name('aliases.update');
});

require __DIR__ . '/auth.php';
