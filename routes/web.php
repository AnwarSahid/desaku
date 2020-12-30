<?php

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

Route::get('/', [App\Http\Controllers\WellcomeController::class, 'index'])->name('welcome');

Auth::routes([
    'register' => false,
]);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\DataController::class, 'create'])->name('tambahpenduduk');
Route::get('/datapenduduk', [App\Http\Controllers\ControllerAdmin::class, 'index'])->name('data');
Route::get('/data/{data}', [App\Http\Controllers\DataController::class, 'edit'])->name('editdata');
Route::patch('/data/{data}', [App\Http\Controllers\DataController::class, 'update'])->name('editdata');
Route::post('/create', [App\Http\Controllers\DataController::class, 'store'])->name('tambahpenduduk');
Route::get('penduduk/hapus/{id}', [App\Http\Controllers\DataController::class, 'destroy'])->name('data');
Route::get('/rekapdana', [App\Http\Controllers\DanadesaController::class, 'index'])->name('dana');
Route::get('/danaswadaya', [App\Http\Controllers\DanaswadayaController::class, 'index'])->name('danaswadaya');
Route::get('/danadesa/tambahrincian', [App\Http\Controllers\DanadesaController::class, 'create'])->name('tambahrincian1');
Route::post('/danadesa/tambahrincian', [App\Http\Controllers\DanadesaController::class, 'store'])->name('tambahrincian1');

Route::get('/danaswadaya/tambahrincian', [App\Http\Controllers\danaswadayaController::class, 'create'])->name('tambahrincian2');
Route::post('/danaswadaya/tambahrincian', [App\Http\Controllers\danaswadayaController::class, 'store'])->name('tambahrincian2');

Route::get('/danadesa/edit/{id}', [App\Http\Controllers\DanadesaController::class, 'edit'])->name('editdana');
Route::get('/danaswadaya/edit/{iddw}', [App\Http\Controllers\DanaswadayaController::class, 'edit'])->name('editswadaya');

Route::get('/danadesa/hapus/{id}', [App\Http\Controllers\DanadesaController::class, 'destroy'])->name('danadesa');

Route::get('/datapendudukguest', [App\Http\Controllers\DataguestController::class, 'index'])->name('dataguest');
Route::get('/rekapdanaguest', [App\Http\Controllers\DanaguestController::class, 'index'])->name('danaguest');

Route::get('/danaswadayaguest', [App\Http\Controllers\DanaswadayaguestController::class, 'index'])->name('swadayaguest');


Route::get('/danaswadaya/hapus/{iddw}', [App\Http\Controllers\DanaswadayaController::class, 'destroy'])->name('danaswadaya');


Route::get('/agenda', function () {
    return view('agenda');
});


Route::get('/tambahdata', function () {
    return view('tambahpenduduk');
});

Route::get('/agendaguest', function () {
    return view('agendaguest');
});

