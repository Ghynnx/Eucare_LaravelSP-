<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

// Student Routes
Route::get('/students', [StudentController::class, 'index']); // List
Route::get('/students/create', [StudentController::class, 'create']); // Form
Route::post('/students', [StudentController::class, 'store']); // Save Action

// Keep these placeholders for now until you implement View/Edit logic fully
Route::get('/students/{id}', function($id) { return view('students.show'); });
Route::get('/students/{id}/edit', function($id) { return view('students.edit'); });