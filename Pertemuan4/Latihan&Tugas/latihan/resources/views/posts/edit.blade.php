<x-layout>
    <x-slot:title>
        Edit Post
    </x-slot:title>

    <div class="max-w-4xl mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">
            Edit Postingan
        </h1>

        <form action="/posts/{{ $post->id }}" method="POST" class="space-y-5">
            @csrf
            @method('PUT')

            <!-- Judul -->
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Judul
                </label>
                <input
                    type="text"
                    name="title"
                    value="{{ old('title', $post->title) }}"
                    class="w-full border rounded-lg p-2"
                    required
                >
            </div>

            <!-- Excerpt -->
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Ringkasan
                </label>
                <textarea
                    name="excerpt"
                    rows="3"
                    class="w-full border rounded-lg p-2"
                    required
                >{{ old('excerpt', $post->excerpt) }}</textarea>
            </div>

            <!-- Body -->
            <div>
                <label class="block text-sm font-semibold mb-1">
                    Isi Post
                </label>
                <textarea
                    name="body"
                    rows="6"
                    class="w-full border rounded-lg p-2"
                    required
                >{{ old('body', $post->body) }}</textarea>
            </div>

            <!-- Action -->
            <div class="flex items-center gap-4">
                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg"
                >
                    Update
                </button>

                <a
                    href="/posts"
                    class="text-gray-600 hover:underline"
                >
                    Batal
                </a>
            </div>
        </form>
    </div>
</x-layout>
