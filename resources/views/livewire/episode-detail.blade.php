<div class="max-w-3xl mx-auto py-10">
    <h2 class="text-xl font-semibold mb-2">Genres:</h2>
<ul class="flex flex-wrap gap-2">
    @foreach ($anime->genres as $genre)
        <li class="bg-gray-200 px-3 py-1 rounded-full text-sm">{{ $genre->name }}</li>
    @endforeach
</ul>

    <h1 class="text-2xl font-bold mb-4">
        {{ $anime->title }} - Episode {{ $episode->episode_number }}: {{ $episode->title }}
    </h1>

    <div class="aspect-video mb-4">
        <iframe src="{{ $episode->stream_url }}"
                class="w-full h-full"
                frameborder="0"
                allowfullscreen></iframe>
    </div>

    <a href="{{ $episode->download_url }}"
       class="inline-block bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700"
       target="_blank">
        Download Episode
    </a>
</div>
