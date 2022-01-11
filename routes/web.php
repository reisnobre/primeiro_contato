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

Route::get('index', [PostController::class, 'index']);
Route::get('show_post', [PostController::class, 'show']);
Route::get('create_post', [PostController::class, 'create']);
Route::post('store_post', [PostController::class, 'store']);
Route::get('edit_post', [PostController::class, 'edit']);
Route::put('update_post', [PostController::class, 'update']);
Route::delete('delete_post', [PostController::class, 'delete']);
