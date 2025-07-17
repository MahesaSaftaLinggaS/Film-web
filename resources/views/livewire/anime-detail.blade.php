<div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <div class="flex gap-6">
        <img src="{{ $anime->thumbnail }}" class="w-48 h-64 object-cover rounded" alt="">
        <div>
            <h1 class="text-2xl font-bold mb-2">{{ $anime->title }}</h1>
            <p class="text-sm text-gray-600 mb-2">Status: {{ $anime->status }}</p>
            <p class="text-sm text-gray-600 mb-2">Tahun Rilis: {{ $anime->released_year }}</p>
            <p class="text-gray-800 text-sm mt-4">{{ $anime->description }}</p>

            @if ($anime->genres->isNotEmpty())
            <p class="text-sm text-gray-600 mb-2">
                Genre:
                @foreach ($anime->genres as $genre)
                <a href="{{ route('genre.show', $genre->slug) }}" class="inline-block bg-gray-200 text-sm px-2 py-1 rounded mr-2">{{ $genre->name }}</a>
                @endforeach

            </p>
            @endif

        </div>
    </div>

    <div class="mt-6">
        <h2 class="text-lg font-semibold">Daftar Episode</h2>

        <ul class="mt-2 list-disc list-inside text-sm text-gray-700">
            @forelse ($episodes as $ep)
            <li>
                Episode {{ $ep->episode_number }} - {{ $ep->title }} —
                <a href="{{ route('episode.detail', ['slug' => $anime->slug, 'episode' => $ep->episode_number]) }}"
                    class="text-blue-600 underline">
                    Streaming
                </a> |
                <a href="{{ $ep->download_url }}" class="text-green-600 underline" target="_blank">Download</a>
            </li>
            @empty
            <li>Belum ada episode.</li>
            @endforelse
        </ul>


    </div>
</div>