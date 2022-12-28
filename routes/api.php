<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post("/login", [AuthController::class, 'login'])->name('login');
Route::get("/me", [AuthController::class, 'getUser'])->middleware('auth:sanctum');