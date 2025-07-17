<x-layouts.app>
    <div class="max-w-5xl mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Genre: {{ $genre->name }}</h1>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
            @foreach ($animes as $anime)
                <a href="{{ route('anime.detail', $anime->slug) }}" class="block bg-white rounded shadow p-4 hover:shadow-lg transition">
                    <img src="{{ $anime->cover }}" alt="{{ $anime->title }}" class="w-full h-48 object-cover rounded mb-2">
                    <h2 class="text-sm font-semibold">{{ $anime->title }}</h2>
                </a>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $animes->links() }}
        </div>
    </div>
</x-layouts.app>
