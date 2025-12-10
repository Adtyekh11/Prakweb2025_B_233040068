<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

 <x-layout>
    {{-- Cara memanggil slot $title yang telah dibuat --}}
    <x-slot:title>
        Blog
    </x-slot:title>
    <h1>Halaman Blog</h1>


    <!-- CONTENT -->
    <main class="container mx-auto px-4 py-8 flex-grow">

        <h2 class="text-3xl font-bold mb-6">Latest Posts</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            <!-- POST CARD 1 -->
            <div class="bg-white shadow rounded-lg p-5">
                <h3 class="text-xl font-semibold mb-2">Judul Postingan 1</h3>
                <p class="text-gray-600 text-sm mb-4">Ini adalah deskripsi singkat dari artikel pertama.</p>
                <a href="#" class="text-blue-600 hover:underline">Read more →</a>
            </div>

            <!-- POST CARD 2 -->
            <div class="bg-white shadow rounded-lg p-5">
                <h3 class="text-xl font-semibold mb-2">Judul Postingan 2</h3>
                <p class="text-gray-600 text-sm mb-4">Ini adalah deskripsi singkat dari artikel kedua.</p>
                <a href="#" class="text-blue-600 hover:underline">Read more →</a>
            </div>

            <!-- POST CARD 3 -->
            <div class="bg-white shadow rounded-lg p-5">
                <h3 class="text-xl font-semibold mb-2">Judul Postingan 3</h3>
                <p class="text-gray-600 text-sm mb-4">Ini adalah deskripsi singkat dari artikel ketiga.</p>
                <a href="#" class="text-blue-600 hover:underline">Read more →</a>
            </div>

        </div>

    </main>

</x-layout>
</body>
</html>
