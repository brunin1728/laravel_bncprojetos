<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuscarCepController;



Route::post('consultarCepPorCodigo', [BuscarCepController::class, 'consultarCepPorCodigo']);