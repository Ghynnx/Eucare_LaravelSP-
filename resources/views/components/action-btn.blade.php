@props(['id'])

<div class="btn-group" role="group">
    <a href="{{ url('/students/' . $id) }}" class="btn btn-primary btn-sm">
        <i class="bi bi-eye-fill"></i> View
    </a>

    <a href="{{ url('/students/' . $id . '/edit') }}" class="btn btn-warning btn-sm text-white">
        <i class="bi bi-pencil-square"></i> Edit
    </a>
</div>