@extends('layout')

@section('title', 'Student Profile')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header card-header-custom">
                <h4 class="mb-0">Student Profile</h4>
            </div>
            <div class="card-body p-4">
                <h2 class="mb-1">Miguel James</h2>
                <p class="text-muted">BS Computer Science</p>
                <hr>
                
                <div class="mb-3">
                    <strong>Email:</strong> <br>
                    miguel.james@example.com
                </div>
                <div class="mb-3">
                    <strong>Student ID:</strong> <br>
                    2023-0001
                </div>
                <div class="mb-3">
                    <strong>Year Level:</strong> <br>
                    3rd Year
                </div>
                
                <div class="mt-4">
                    <a href="{{ url('/students') }}" class="btn btn-outline-secondary">Back to List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection