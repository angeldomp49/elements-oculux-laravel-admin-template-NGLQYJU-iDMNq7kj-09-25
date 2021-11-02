<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ FormController::class, 'index' ]);

Route::post('/save', [ FormController::class, 'save' ])
    ->name('save');

include(__DIR__ . '/demo.php');