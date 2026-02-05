<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Import the Model

class StudentController extends Controller
{
    // READ: Show the list of students
    public function index()
    {
        $students = Student::all(); // Fetch all data from DB
        return view('students.index', compact('students'));
    }

    // CREATE: Show the form
    public function create()
    {
        return view('students.create');
    }

    // STORE: Save the new student to DB
    public function store(Request $request)
    {
        // Validation (Optional but recommended)
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'course' => 'required',
            'year_level' => 'required|integer'
        ]);

        // Save data
        Student::create($request->all());

        // Redirect back to list
        return redirect('/students'); 
    }
    
    // VIEW & EDIT methods would go here later...
}