<?php

use App\Http\Controllers\DataTableController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/form1', [ FormController::class, 'index' ]);

Route::patch('/save', [ FormController::class, 'save' ])
    ->name('save');

Route::get('/leads/dashboard', [ DataTableController::class, 'dashboard' ])
    ->name('dashboard');
    //->middleware('auth');

include(__DIR__ . '/demo.php');