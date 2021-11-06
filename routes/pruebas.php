<?php

use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;

Route::get( '/prueba/check', [PruebaController::class, 'check'] );