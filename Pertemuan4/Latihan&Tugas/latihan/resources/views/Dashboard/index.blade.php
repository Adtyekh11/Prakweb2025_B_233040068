<x-layout>
    <x-slot:title>Dashboard</x-slot:title>

<div class="max-w-6xl mx-auto px-4 py-10">
    <!-- Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white">
            Dashboard
        </h1>
        <p class="text-gray-700 dark:text-gray-400 mt-1">
            Selamat datang di halaman dashboard, {{ auth()->user()->name }}!
        </p>
    </div>

    <!-- Statistik -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">
        <div class="bg-white dark:bg-gray-800 rounded-lg p-5 shadow">
            <p class="text-sm text-gray-500 dark:text-gray-400">Posts</p>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">38</h2>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg p-5 shadow">
            <p class="text-sm text-gray-500 dark:text-gray-400">Categories</p>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">5</h2>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-lg p-5 shadow">
            <p class="text-sm text-gray-500 dark:text-gray-400">Users</p>
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white">100</h2>
        </div>
    </div>

    <!-- Postingan -->
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
                Postingan Saya
            </h2>
            <a href="/blog/create" class="text-blue-600 hover:underline">
                + Tambah Postingan
            </a>
        </div>

        <div class="space-y-4">
            <div class="border-b pb-3">
                <h3 class="font-semibold text-gray-900 dark:text-white">
                    Belajar Laravel 
                </h3>
                <p class="text-sm text-gray-500">Desember 10, 2025 · Aditya</p>
            </div>
            <div class="border-b pb-3">
                <h3 class="font-semibold text-gray-900 dark:text-white">
                    Belajar Tailwind CSS
                </h3>
                <p class="text-sm text-gray-500">Desember 8, 2025 · Aditya</p>
            </div>
            <div>
                <h3 class="font-semibold text-gray-900 dark:text-white">
                    Belajar MVC Laravel
                </h3>
                <p class="text-sm text-gray-500">Desember 5, 2025 · Aditya</p>
            </div>
        </div>
    </div>
</div>

</x-layout>
