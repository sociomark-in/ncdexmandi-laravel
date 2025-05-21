<?php

use App\Http\Controllers\Api\FPOAPIController;
use Illuminate\Support\Facades\Route;

Route::prefix('v2')->group(function () {
    Route::apiResource('fpo', FPOAPIController::class)->names('api_fpo');
});
