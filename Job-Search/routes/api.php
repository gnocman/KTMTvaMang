<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Resource Controller */
use App\Http\Controllers\CurriculumVitaeController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\RecruitmentController;

/* API Controllers */
use App\Http\Controllers\API\CompanyAPIController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
    // Route::get('/get-company', [CompanyAPIController::class, 'index']);
});
Route::get('/get-company', [CompanyAPIController::class, 'index'])->name('company.get');
