<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

// Homepage
Route::get('/', [WebController::class, 'home'])->name('home');

// Job Detail & Apply
Route::get('/jobs/{id}', [WebController::class, 'jobDetail'])->name('jobs.detail');
Route::post('/jobs/{id}/apply', [WebController::class, 'jobApply'])->name('jobs.apply')->middleware('auth');

// Panduan Page
Route::get('/panduan', [WebController::class, 'panduan'])->name('panduan');

// Peta Page
Route::get('/peta', [WebController::class, 'peta'])->name('peta');

// Statistik Page - TAMBAH INI
Route::get('/statistik', [WebController::class, 'statistik'])->name('statistik');

// Authentication Routes
Route::get('/login', [WebController::class, 'showLogin'])->name('login');
Route::post('/login', [WebController::class, 'login'])->name('login.post');
Route::get('/register', [WebController::class, 'showRegister'])->name('register');
Route::post('/register', [WebController::class, 'register'])->name('register.post');
Route::post('/logout', [WebController::class, 'logout'])->name('logout')->middleware('auth');

// Profile Routes (Protected)
Route::middleware(['auth'])->group(function () {
    // Profile view - menampilkan data profil user yang login
    Route::get('/profile', [WebController::class, 'profile'])->name('profile.index');
    
    // Profile update - menyimpan perubahan profil
    Route::put('/profile', [WebController::class, 'profileUpdate'])->name('profile.update');
    
    // Application history - melihat riwayat lamaran
    Route::get('/profile/applications', [WebController::class, 'applications'])->name('profile.applications');
});
