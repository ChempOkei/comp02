<?php

use App\Http\Controllers\CertificateController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\CourseController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/registr', [AuthController::class, 'register']);
Route::post('/auth', [AuthController::class, 'login']);

Route::get('/courses', [CourseController::class, 'index']);
Route::post('/courses', [CourseController::class, 'store']);
Route::get('/courses/{id}', [CourseController::class, 'show']);
Route::post('/courses/{id}/buy', [CourseController::class, 'buy']);
Route::post('/payment-webhook', [CourseController::class, 'webhook']);
Route::post('/create-sertificate', [CertificateController::class, 'index']);

Route::apiResource('lessons', LessonController::class);