<div class="max-w-6xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6">Daftar Anime</h1>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        @forelse ($animes as $anime)
        <a href="{{ route('anime.show', $anime->slug) }}" class="block">
            <img src="{{ $anime->thumbnail }}" alt="{{ $anime->title }}" class="w-full h-48 object-cover rounded">
            <h2 class="mt-2 font-semibold text-sm">{{ $anime->title }}</h2>
        </a>
        @empty
        <p>Tidak ada anime tersedia.</p>
        @endforelse
    </div>

    <div class="mt-6">
        {{ $animes->links() }}
    </div>
</div>