<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\FrontController;
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

// Front
Route::get('/', [FrontController::class, 'index']);


// Back
Route::get('/backoffice', [BackController::class, 'index']);
Route::get('/fichier', [BackController::class, 'create']);
Route::post('/store-fichier', [BackController::class, 'store']);
Route::get('/edit-fichier/{id}', [BackController::class, 'edit']);
Route::post('/update-fichier/{id}', [BackController::class, 'update']);
Route::post('/delete-fichier/{id}', [BackController::class, 'destroy']);
Route::get('/download-fichier/{id}', [BackController::class, 'download']);