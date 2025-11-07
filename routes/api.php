<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\SegmentController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\TechnicalSheetController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/technical-sheets', TechnicalSheetController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/subcategories', SubcategoryController::class);
Route::resource('/segments', SegmentController::class);
Route::resource('/models', ModelController::class);
Route::resource('/users', UserController::class);
