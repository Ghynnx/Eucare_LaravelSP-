<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Portal')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 text-slate-800">
    <nav class="bg-red-800 p-4 text-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="font-bold text-xl uppercase tracking-wider">Student Portal</h1>
            <div class="flex space-x-2 text-sm font-medium">
                <a href="/home" class="px-4 py-2 rounded-lg hover:bg-red-700 transition duration-200">Home</a>
                <a href="/students" class="px-4 py-2 rounded-lg hover:bg-red-700 transition duration-200">Students</a>
                <a href="/students/create" class="px-4 py-2 rounded-lg bg-red-900 hover:bg-black transition duration-200">Add Student</a>
            </div>
        </div>
    </nav>

    <main class="container mx-auto mt-10 p-8 bg-white rounded-xl shadow-lg border border-red-100">
        @yield('content')
    </main>
</body>
</html>