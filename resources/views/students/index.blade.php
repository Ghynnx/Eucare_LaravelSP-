@extends('layout')

@section('title', 'Student List')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-primary-custom">Student List</h2>
    <a href="{{ url('/students/create') }}" class="btn btn-success">Add New Student</a>
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
                <tr>
                    <td class="px-4">Miguel James</td>
                    <td>BS Computer Science</td>
                    <td>3rd Year</td>
                    <td>
                        <x-action-btn :id="1" />
                    </td>
                </tr>
                <tr>
                    <td class="px-4">Anna Lee</td>
                    <td>BS Info Tech</td>
                    <td>2nd Year</td>
                    <td>
                        <x-action-btn :id="1" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection