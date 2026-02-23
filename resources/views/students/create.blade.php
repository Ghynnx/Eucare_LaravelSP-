@extends('layout')

@section('title', 'Add Student')

@section('content')
    <h2 class="text-2xl font-extrabold text-red-800 mb-6 tracking-tight">Add New Student</h2>

    <form action="/students" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @csrf
    <div>
        <label class="block text-sm font-bold text-slate-700 mb-1">Full Name</label>
        <input type="text" name="name" required 
            class="w-full border-red-100 border-2 rounded-lg p-2.5 focus:outline-none focus:border-red-500 transition-colors">
    </div>
    <div>
        <label class="block text-sm font-bold text-slate-700 mb-1">Email Address</label>
        <input type="email" name="email" required 
            class="w-full border-red-100 border-2 rounded-lg p-2.5 focus:outline-none focus:border-red-500 transition-colors">
    </div>
    <div>
        <label class="block text-sm font-bold text-slate-700 mb-1">Course</label>
        <input type="text" name="course" required 
            class="w-full border-red-100 border-2 rounded-lg p-2.5 focus:outline-none focus:border-red-500 transition-colors">
    </div>
    <div>
        <label class="block text-sm font-bold text-slate-700 mb-1">Year Level</label>
        <select name="year_level" 
            class="w-full border-red-100 border-2 rounded-lg p-2.5 focus:outline-none focus:border-red-500 transition-colors bg-white">
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
        </select>
    </div>
    <div class="md:col-span-2 flex items-center space-x-4 mt-6">
        <button type="submit" 
            class="bg-red-600 text-white px-10 py-3 rounded-lg font-bold shadow-md hover:bg-red-700 hover:shadow-lg active:scale-95 transition-all uppercase tracking-wide">
            Save Record
        </button>
        
        <a href="/students" class="text-slate-500 font-medium hover:text-red-600 transition-colors">
            Cancel
        </a>
    </div>
</form>
@stop