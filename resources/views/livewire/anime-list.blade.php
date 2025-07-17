<div> {{-- Ini root tunggal yang membungkus semua --}}

    <div class="mb-4">
        <input wire:model="search" type="text" placeholder="Cari anime..." class="w-full p-2 border rounded shadow-sm" />
    </div>

    <div class="mb-6">
    <h2 class="text-xl font-semibold mb-2">Genre</h2>
    <div class="flex flex-wrap gap-2">
        @foreach ($genres as $genre)
            <a href="{{ route('genre.show', $genre->slug) }}"
               class="px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded text-sm text-gray-700">
                {{ $genre->name }}
            </a>
        @endforeach
    </div>
</div>

    <div class="mt-4">
    <a href="{{ route('genres.list') }}"
       class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 text-sm">
        Lihat Semua Genre
    </a>
</div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @foreach ($animes as $anime)
        <a href="{{ route('anime.detail', $anime->slug) }}" class="block bg-white rounded shadow p-2 hover:-translate-y-1 transition">
            <img src="{{ $anime->thumbnail }}" alt="" class="w-full h-40 object-cover rounded">
            <h2 class="font-bold mt-2 text-sm">{{ $anime->title }}</h2>
            <p class="text-xs text-gray-600">{{ $anime->status }} - {{ $anime->released_year }}</p>
        </a>
        @endforeach

        {{ $animes->links() }}
    </div>

</div> {{-- Tutup root tunggal --}}


