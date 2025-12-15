<x-layout>
    <x-slot:title>
        {{ $post->title }}
    </x-slot:title>

    <div class="max-w-4xl mx-auto px-4 py-10">
        {{-- Judul --}}
        <h1 class="text-3xl font-bold text-gray-900 mb-4">
            {{ $post->title }}
        </h1>

        {{-- Meta --}}
        <div class="text-sm text-gray-600 mb-6">
            <span>
                Oleh <strong>{{ $post->author->name }}</strong>
            </span>
            <span class="mx-2">•</span>
            <span>
                {{ $post->created_at->format('d M Y') }}
            </span>
            <span class="mx-2">•</span>
            <span class="text-blue-600">
                {{ $post->category->name ?? 'Uncategorized' }}
            </span>
        </div>

        {{-- Gambar (jika ada) --}}
        @if ($post->image)
            <img
                src="{{ asset('storage/' . $post->image) }}"
                alt="{{ $post->title }}"
                class="w-full rounded-lg mb-6"
            >
        @endif

        {{-- Isi Post --}}
        <div class="prose max-w-none text-gray-800">
            {!! nl2br(e($post->body)) !!}
        </div>

        {{-- Tombol Aksi --}}
        <div class="flex justify-between items-center mt-10">
            <a
                href="{{ route('posts.index') }}"
                class="text-blue-600 hover:underline"
            >
                ← Kembali ke Daftar Post
            </a>

            <div class="flex gap-4">
                <a
                    href="{{ route('posts.edit', $post) }}"
                    class="text-yellow-600 hover:underline"
                >
                    Edit
                </a>

                <form
                    action="{{ route('posts.destroy', $post) }}"
                    method="POST"
                    onsubmit="return confirm('Yakin ingin menghapus post ini?');"
                >
                    @csrf
                    @method('DELETE')
                    <button
                        type="submit"
                        class="text-red-600 hover:underline"
                    >
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
