<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::middleware('auth')
    ->group(function(){
        Route::resource('/lead', LeadController::class );
        Route::get('/lead/order_by/{attribute?}', [ LeadController::class, 'orderBy' ])
            ->name('lead.order_by');

        Route::get('/lead/trashed/all', [ LeadController::class, 'trashed' ])
            ->name('leads.trashed');

        Route::delete('/lead/trashed/delete_permanently/{lead}', [ LeadController::class,'deletePermanently' ])
            ->name('lead.delete_permanently');

        Route::patch('/lead/trashed/restore/{lead}', [ LeadController::class,'restore' ])
            ->name('lead.restore');
    });

include(__DIR__ . '/demo.php');