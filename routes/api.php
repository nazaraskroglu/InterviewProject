<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::prefix('/company')->group(function () {
    Route::post('/', [CompanyController::class, 'create']);
    Route::get('/{id}', [CompanyController::class, 'get']);
    Route::put('/{id}', [CompanyController::class, 'update']);
    Route::get('/', [CompanyController::class, 'list']);
    Route::delete('/{id}', [CompanyController::class, 'delete']);
});

