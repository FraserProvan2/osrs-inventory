<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/item/{item_id}', [App\Http\Controllers\OldSchoolItemController::class, 'getItemIconSrc']);

Route::get('/likes/{inventory_id}', [App\Http\Controllers\LikeController::class, 'action'])->middleware('auth');