<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\CourseController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('teachers',TeacherController::class)->middleware('is_admin');
    Route::middleware('admin_teacher')->group(function (){

        Route::resource('courses',CourseController::class);
        Route::get('/change-course-status/{id}',[CourseController::class,'changeStatus'])->name('change-course-status');

    });

});

