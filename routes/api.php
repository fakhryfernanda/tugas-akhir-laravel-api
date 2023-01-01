<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftarController;

Route::post("/login", [AuthController::class, 'login'])->name('login');
Route::get("/me", [AuthController::class, 'getUser'])->middleware('auth:sanctum');
Route::post("/register", [AuthController::class, 'register']);


Route::prefix('pendaftar')->group(function(){
    Route::get("/all", [PendaftarController::class, "index"]);
    Route::get("/detail/{id}", [PendaftarController::class, "detail"]);
    Route::post("/add", [PendaftarController::class, "store"]);
    Route::put("/edit/{id}", [PendaftarController::class, "edit"]);
});

Route::get("/datadiri/{id}", [PendaftarController::class, "dataDiri"]);