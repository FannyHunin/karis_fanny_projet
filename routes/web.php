<?php

use App\Http\Controllers\JoueurController;
use App\Http\Controllers\EquipeController;
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

Route::get('/create', [JoueurController::class, 'create']);
Route::post('/store-joueur', [JoueurController::class, 'store']);
Route::get('/', [EquipeController::class, 'index']);
Route::get('/show/{id}', [EquipeController::class, 'show']);
Route::get('/joueurs', [JoueurController::class, 'index']);
