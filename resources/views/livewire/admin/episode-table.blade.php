<div class="max-w-5xl mx-auto mt-10">
    <h2 class="text-xl font-bold mb-4">Daftar Episode</h2>

    @if (session()->has('success'))
        <div class="p-2 mb-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse border">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-2 border">Anime</th>
                <th class="p-2 border">Episode</th>
                <th class="p-2 border">Judul</th>
                <th class="p-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($episodes as $ep)
                <tr>
                    <td class="p-2 border">{{ $ep->anime->title }}</td>
                    <td class="p-2 border">Episode {{ $ep->episode_number }}</td>
                    <td class="p-2 border">{{ $ep->title }}</td>
                    <td class="p-2 border space-x-2">
                        {{-- Tombol Edit bisa diarahkan ke rute edit nanti --}}
                        <a href="{{ route('admin.episode.edit', $ep->id) }}" class="text-blue-600 hover:underline">Edit</a>

                        <button wire:click="delete({{ $ep->id }})"
                                class="text-red-600 hover:underline"
                                onclick="return confirm('Hapus episode ini?')">
                            Hapus
                        </button>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="p-4 text-center text-gray-500">Belum ada episode.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
