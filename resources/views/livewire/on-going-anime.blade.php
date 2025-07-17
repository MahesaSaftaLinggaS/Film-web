@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-4">Anime On‑Going</h1>

    {{-- Filter atau navigasi lainnya bisa ditambahkan di sini jika diperlukan --}}
    {{-- Contoh tombol navigasi sederhana --}}
    <div class="mb-6 flex gap-4">
        <a href="{{ route('ongoing.anime') }}" class="text-blue-600 hover:underline">On-Going</a>
        <a href="{{ route('completed.anime') }}" class="text-gray-600 hover:underline">Completed</a>
        <a href="{{ url('/') }}" class="text-gray-600 hover:underline">Semua Anime</a>

    </div>

    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
        @forelse ($animes as $anime)
            <a href="{{ route('anime.detail', $anime->slug) }}" class="block bg-white rounded shadow hover:shadow-md transition">
                <img src="{{ $anime->thumbnail }}" alt="{{ $anime->title }}" class="rounded-t w-full h-48 object-cover">
                <div class="p-2">
                    <h2 class="font-semibold text-sm sm:text-base line-clamp-2">{{ $anime->title }}</h2>
                </div>
            </a>
        @empty
            <div class="col-span-4 text-center text-gray-500">
                Tidak ada anime dengan status "On‑Going".
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $animes->links() }}
    </div>
</div>
@endsection
