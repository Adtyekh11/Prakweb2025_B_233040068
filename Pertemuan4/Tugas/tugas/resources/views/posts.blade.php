<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman daftar posts</title>
</head>
<body>
    <x-layout>
    {{-- Cara memanggil slot $title yang telah dibuat --}}
    <x-slot:title>
        Post
    </x-slot:title>
    <h1>Daftar posts</h1>
    <ul>
        @foreach ($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    
    </x-layout>
</body>
</html>