<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    {{-- Tambahkan slot baru dengan nama $title --}}
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    {{--flowbite--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</head>

<body>
      <!-- NAVBAR -->
    <header class="bg-white shadow">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">{{ $title }}</h1>
            <nav class="space-x-4">
                <a href="/Home" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="/About" class="text-gray-700 hover:text-blue-600">About</a>
                <a href="/Blog" class="text-gray-700 hover:text-blue-600">Blog</a>
                <a href="/Contact" class="text-gray-700 hover:text-blue-600">Contact</a>
                <a href="/categories" class="text-gray-700 hover:text-blue-600">Category</a>
                <a href="/posts" class="text-gray-700 hover:text-blue-600">Posts</a>
            </nav>
        </div>
    </header>
    {{ $slot }}
</body>

  <!-- FOOTER -->
<footer class="bg-gray-800 text-white py-4 mt-10">
    <div class="container mx-auto text-center">
        <p class="text-sm">&copy; 2025 My Website. All rights reserved.</p>
    </div>
</footer>
