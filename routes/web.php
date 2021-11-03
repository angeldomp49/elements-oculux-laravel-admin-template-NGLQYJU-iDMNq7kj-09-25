<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/form1', [ FormController::class, 'index' ]);

Route::patch('/save', [ FormController::class, 'save' ])
    ->name('save');

include(__DIR__ . '/demo.php');