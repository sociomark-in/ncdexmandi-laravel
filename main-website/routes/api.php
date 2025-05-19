<?php

use App\Http\Controllers\Api\FPOController;
use Illuminate\Support\Facades\Route;

Route::prefix('v2')->group(function () {
    Route::apiResource('fpo', FPOController::class)->names('api_fpo');
});
