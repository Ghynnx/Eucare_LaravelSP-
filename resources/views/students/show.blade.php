@extends('layout')

@section('title', 'Student Profile')

@section('content')
    <h2 class="text-2xl font-extrabold text-red-800 mb-6 tracking-tight">Student Profile</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 py-6 border-t border-red-100">
        <div>
            <label class="text-xs font-bold uppercase text-red-600 tracking-widest">Full Name</label>
            <p class="text-lg text-slate-900 font-semibold">{{ $student->name }}</p>
        </div>
        <div>
            <label class="text-xs font-bold uppercase text-red-600 tracking-widest">Email Address</label>
            <p class="text-lg text-slate-900 font-semibold">{{ $student->email }}</p>
        </div>
        <div>
            <label class="text-xs font-bold uppercase text-red-600 tracking-widest">Course</label>
            <p class="text-lg text-slate-900 font-semibold">{{ $student->course }}</p>
        </div>
        <div>
            <label class="text-xs font-bold uppercase text-red-600 tracking-widest">Year Level</label>
            <p class="text-lg text-slate-900 font-semibold">{{ $student->year_level }}</p>
        </div>
    </div>

    <div class="mt-10">
        <a href="/students" class="inline-block bg-slate-100 text-slate-700 px-6 py-2.5 rounded-lg font-bold hover:bg-slate-200 transition shadow-sm active:scale-95 text-sm uppercase tracking-wide">
            ← Back to Student List
        </a>
    </div>
@stop