<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Music;

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

Route::middleware(['auth'])->group(function(){
    Route::get('/list', [Music::class, 'index'])->name('list');
    Route::get('/add', [Music::class, 'create'])->name('add');
    Route::post('/added', [Music::class, 'store'])->name('added');
    Route::get('/detail/{id}', [Music::class, 'show'])->name('detail');
    Route::get('/edit/{id}', [Music::class, 'edit'])->name('edit');
    Route::post('/updated/{id}', [Music::class, 'update'])->name('updated');
    Route::delete('/list/{id}', [Music::class, 'destroy'])->name('delete');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
