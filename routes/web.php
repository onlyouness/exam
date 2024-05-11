<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VoitureController;

Route::get('/',[VoitureController::class, "index"]);
Route::get("/login",[ClientController::class, "show"]);
Route::post("/save_login",[ClientController::class, "store"]);