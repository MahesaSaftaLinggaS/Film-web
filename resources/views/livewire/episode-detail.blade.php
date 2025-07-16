<div class="max-w-3xl mx-auto py-10">
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
