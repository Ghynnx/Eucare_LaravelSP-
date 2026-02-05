@extends('layout')

@section('title', 'Student List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-primary-custom">Student List</h2>
    <a href="{{ url('/students/create') }}" class="btn btn-success shadow-sm">
        <i class="bi bi-plus-lg me-1"></i> Add New Student
    </a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0">
            <thead style="background-color: #2c3e50; color: white;">
                <tr>
                    <th class="py-3 px-4">Name</th>
                    <th class="py-3">Course</th>
                    <th class="py-3">Year Level</th>
                    <th class="py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($students->count() > 0)
                    @foreach ($students as $student)
                    <tr>
                        <td class="px-4 fw-bold">{{ $student->name }}</td>
                        <td>{{ $student->course }}</td>
                        <td>{{ $student->year_level }}</td>
                        <td>
                            <x-action-btn :id="$student->id" />
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center py-4 text-muted">
                            No students found. Click "Add New Student" to create one.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection