<div class="max-w-4xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-4">Daftar Genre Anime</h1>

    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
        @foreach ($genres as $genre)
            <a href="{{ route('genre.show', $genre->slug) }}"
               class="block p-3 bg-gray-100 hover:bg-gray-200 rounded text-center text-gray-700 font-semibold">
                {{ $genre->name }}
            </a>
        @endforeach
    </div>
</div>
