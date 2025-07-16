<div class="max-w-5xl mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-6">Manajemen Anime</h1>

    @if (session()->has('success'))
        <div class="p-4 mb-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('admin.anime.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Anime</a>

    <div class="bg-white shadow rounded">
        <table class="w-full text-sm text-left">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-3">Judul</th>
                    <th class="p-3">Status</th>
                    <th class="p-3">Tahun</th>
                    <th class="p-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animes as $anime)
                <tr class="border-t">
                    <td class="p-3">{{ $anime->title }}</td>
                    <td class="p-3">{{ $anime->status }}</td>
                    <td class="p-3">{{ $anime->released_year }}</td>
                    <td class="p-3 flex gap-2">
                        <a href="{{ route('admin.anime.edit', $anime->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('admin.anime.delete', $anime->id) }}" method="POST" onsubmit="return confirm('Hapus anime ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
