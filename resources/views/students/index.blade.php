@extends('layout')

@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-2xl font-bold text-slate-800">Student Directory</h2>
    <a href="/students/create" class="bg-red-600 text-white px-6 py-2.5 rounded-lg font-bold hover:bg-red-700 transition shadow-md active:transform active:scale-95">
        + ADD NEW STUDENT
    </a>
</div>

<div class="overflow-x-auto">
    <table class="w-full">
        <thead>
            <tr class="text-left text-sm font-bold text-red-800 uppercase tracking-widest border-b-2 border-red-100">
                <th class="px-6 py-4">Name</th>
                <th class="px-6 py-4">Email</th>
                <th class="px-6 py-4">Course</th>
                <th class="px-6 py-4 text-center">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            @foreach($students as $student)
            <tr class="hover:bg-red-50/50 transition">
                <td class="px-6 py-4 font-semibold text-slate-700">{{ $student->name }}</td>
                <td class="px-6 py-4 text-slate-500">{{ $student->email }}</td>
                <td class="px-6 py-4 text-slate-500">{{ $student->course }}</td>
                <td class="px-6 py-4 text-center">
                    <div class="inline-flex gap-2">
                        <a href="/students/{{ $student->id }}" class="bg-slate-100 text-slate-700 px-4 py-1.5 rounded-md text-xs font-bold hover:bg-slate-200 transition">
                            VIEW
                        </a>
                        <a href="/students/{{ $student->id }}/edit" class="bg-red-100 text-red-700 px-4 py-1.5 rounded-md text-xs font-bold hover:bg-red-600 hover:text-white transition">
                            EDIT
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection 