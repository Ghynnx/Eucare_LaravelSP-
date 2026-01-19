@extends('layout')

@section('title', 'Welcome')

@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold text-primary-custom">Welcome to the Student Portal</h1>
        <p class="col-md-8 fs-4 mx-auto text-muted">
            Manage your student records efficiently. View lists, add profiles, and update information.
        </p>
        <a href="{{ url('/students') }}" class="btn btn-primary btn-lg" type="button">Go to Student List</a>
    </div>
</div>
@endsection