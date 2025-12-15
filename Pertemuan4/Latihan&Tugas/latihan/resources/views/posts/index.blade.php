<x-layout>
    <x-slot:title>
        Posts
    </x-slot:title>

    <div class="max-w-4xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">
            Daftar Postingan
        </h1>

        <div class="mb-6 flex justify-end">
            <a href="{{ route('posts.create') }}" 
               class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Buat Postingan Baru
            </a>
        </div>

        <div class="space-y-6">
            @foreach ($posts as $post)
                <article class="bg-white dark:bg-gray-800 rounded-lg shadow p-5">
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">
                        <a href="/posts/{{ $post->slug }}" class="hover:underline">
                            {{ $post->title }}
                        </a>
                    </h2>

                    <p class="text-gray-600 dark:text-gray-400 mb-4">
                        {{ $post->excerpt }}
                    </p>

                    <div class="flex items-center gap-4 text-sm">
                        <!-- Read -->
                        <a href="/posts/{{ $post->slug }}" class="text-blue-600 hover:underline">
                            Baca
                        </a>

                        <!-- Update -->
                        <a href="/posts/{{ $post->id }}/edit" class="text-yellow-600 hover:underline">
                            Edit
                        </a>

                        <!-- Delete -->
                        <form action="/posts/{{ $post->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus post ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">
                                Hapus
                            </button>
                        </form>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</x-layout>
