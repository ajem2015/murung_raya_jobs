<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LamaranController;

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

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Pekerjaan routes (public)
Route::get('/pekerjaan', [PekerjaanController::class, 'index']);
Route::get('/pekerjaan/{id}', [PekerjaanController::class, 'show']);

// Kecamatan routes (public)
Route::get('/kecamatan', [KecamatanController::class, 'index']);

// Kategori routes (public)
Route::get('/kategori', [KategoriController::class, 'index']);

// Protected routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    // Auth routes
    Route::get('/user', [AuthController::class, 'getUser']);
    Route::post('/logout', [AuthController::class, 'logout']);
    
    // Lamaran routes
    Route::post('/lamaran', [LamaranController::class, 'store']);
    Route::get('/lamaran/user/{id}', [LamaranController::class, 'getByUser']);
});
