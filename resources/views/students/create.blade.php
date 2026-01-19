@extends('layout')

@section('title', 'Add New Student')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow-sm border-0">
            <div class="card-header card-header-custom">
                <h4 class="mb-0">Add New Student</h4>
            </div>
            <div class="card-body p-4">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="e.g. Miguel James">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="e.g. miguel.james@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <input type="text" class="form-control" placeholder="e.g. BS Computer Science">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Year Level</label>
                        <input type="number" class="form-control" placeholder="e.g. 3">
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <a href="{{ url('/students') }}" class="btn btn-secondary me-2">Cancel</a>
                        <button type="button" class="btn btn-success">Save Student</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection