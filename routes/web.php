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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

// TODO add middleware auth
Route::get('/inventories', [App\Http\Controllers\InventoryController::class, 'index'])->name('inventories');
Route::post('/inventories', [App\Http\Controllers\InventoryController::class, 'index']);
Route::get('/inventories/{id}', [App\Http\Controllers\InventoryController::class, 'show'])->name('show');
Route::post('/inventories/store', [App\Http\Controllers\InventoryController::class, 'store']);
Route::post('/inventories/{id}/update', [App\Http\Controllers\InventoryController::class, 'update']);
Route::post('/inventories/{id}/update-name', [App\Http\Controllers\InventoryController::class, 'updateName']);
Route::get('/inventories/{id}/destroy', [App\Http\Controllers\InventoryController::class, 'destroy']);
