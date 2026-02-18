<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/course-admin/login');
Route::redirect('/course-admin', '/course-admin/login');

Route::prefix('course-admin')->group(function () {
    Route::get('/login', function () {
        return view('login');
    });
    Route::get('/courses', function () {
        return view('courses.view');
    });
    Route::get('/courses/create', function () {
        return view('courses.create');
    });
    Route::get('/courses/{id}/edit', function () {
        return view('courses.edit');
    });
    Route::get('/lessons/{id}', function () {
        return view('lessons.view');
    });
    Route::get('/lessons/create', function () {
        return view('lessons.create');
    });
    Route::get('/lessons/{id}/edit', function () {
        return view('lessons.edit');
    });
    Route::get('/students', function () {
        return view('students');
    });
    Route::post('/login', [AdminAuthController::class, 'login']);

    Route::post('/courses/create', [CourseController::class, 'storeWeb']);
});