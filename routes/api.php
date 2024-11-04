<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ReservaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/validate-token', [AuthController::class, 'validateToken']);
    // Rotas para Locais
    Route::get('locais', [LocalController::class, 'index']);
    Route::post('locais', [LocalController::class, 'store']);
    Route::get('locais/{local}', [LocalController::class, 'show']);
    Route::put('locais/{local}', [LocalController::class, 'update']);
    Route::delete('locais/{local}', [LocalController::class, 'destroy']);

    // Rotas para Reservas
    Route::get('reservas', [ReservaController::class, 'index']);
    Route::post('reservas', [ReservaController::class, 'store']);
    Route::get('reservas/{reserva}', [ReservaController::class, 'show']);
    Route::put('reservas/{reserva}', [ReservaController::class, 'update']);
    Route::delete('reservas/{reserva}', [ReservaController::class, 'destroy']);
});
