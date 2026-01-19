<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('welcome');
});

// Student List
Route::get('/students', function () {
    return view('students.index');
});

// Add Student Form
Route::get('/students/create', function () {
    return view('students.create');
});

// View Student Profile (Static ID for demo)
Route::get('/students/1', function () {
    return view('students.show');
});

// Edit Student Form (Static ID for demo)
Route::get('/students/1/edit', function () {
    return view('students.edit');
});