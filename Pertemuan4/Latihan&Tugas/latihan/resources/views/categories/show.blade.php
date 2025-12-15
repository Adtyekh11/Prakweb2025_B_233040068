<x-layout>
    <x-slot:title>
        Detail Category
    </x-slot:title>

    <div class="max-w-4xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-gray-900 mb-4">
            {{ $category->name }}
        </h1>


        <a
            href="{{ route('categories.index') }}"
            class="text-blue-600 hover:underline"
        >
            ← Kembali ke Daftar Category
        </a>
    </div>
</x-layout>
