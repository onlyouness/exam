<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VoitureController;

Route::get("/login", [ClientController::class, "show"])->name("login");
Route::post("/save_login", [ClientController::class, "store"]);
Route::post("/save_register", [ClientController::class, "register"]);
Route::get("/register", [ClientController::class, "showRegister"]);
Route::get("/logout", [ClientController::class, "logOut"]);
Route::group(["middleware" => ["auth:client"]], function () {
    Route::get('/', [VoitureController::class, "index"]);
    Route::get("/show_voiture/{voiture}", [VoitureController::class, "show"]);
    Route::post("/save_loyer/{voiture}", [VoitureController::class, "saveLoyer"]);
});
Route::group(["middleware" => ["auth:admin"]], function () {
    Route::get('/dashboard', [VoitureController::class, "dashboard"])->name("dashboard");
    Route::get("/ajouter", [VoitureController::class, "ajouteVoiture"]);
    Route::post("/save_voiture", [VoitureController::class, "store"]);
    Route::get("/editVoiture/{voiture}", [VoitureController::class, "edit"]);
    Route::put("save_edit/{voiture}", [VoitureController::class, "update"]);
    Route::delete("/deleteVoiture/{voiture}", [VoitureController::class, "destroy"]);
    Route::get("/locations", [VoitureController::class, "showLocation"]);
    Route::delete("/deleteLocation/{location}", [VoitureController::class, "deleteLocation"]);
});