<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LecturerController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/', HomeController::class);

Route::resource('students', StudentController::class);
Route::resource('lecturers', LecturerController::class);
                        
                        
                        