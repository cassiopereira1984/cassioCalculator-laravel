<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::post('/calcular', [CalculadoraController::class, 'calcular']);