<?php

use App\Http\Controllers\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/news', [NewsController::class, 'index']); // Melihat semua data News Digital
Route::post('/news', [NewsController::class, 'store']); // Menambahkan News baru
Route::get('/news/{id}', [NewsController::class, 'show']); // Melihat Detail News
Route::put('/news/{id}', [NewsController::class, 'update']); // Mengedit News
Route::delete('/news/{id}', [NewsController::class, 'destroy']); // Menghapus News


Route::prefix('news/category')->group(function() {
Route::get('/sport', [NewsController::class, 'sport']); // Mendapatkan Resource Sport
Route::get('/finance', [NewsController::class, 'finance']); // Mendapatkan Resource Finance
Route::get('/automotive', [NewsController::class, 'automotive']); //Mendapatkan Resource Authomotive
});

Route::get('/news/search', [NewsController::class, 'search']); // Mencari News dengan menggunakan judul (title)

Route::post('/register', [AuthController::class,'register']);
Route::post('/login', [AuthController::class,'login']);