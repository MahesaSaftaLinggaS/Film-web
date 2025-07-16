<div class="max-w-xl mx-auto p-6 bg-white rounded shadow mt-10">
    <h2 class="text-xl font-bold mb-4">Tambah Episode</h2>

    @if (session()->has('success'))
        <div class="p-2 mb-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="space-y-4">
        <div>
            <label class="block text-sm font-semibold mb-1">Anime</label>
            <select wire:model="anime_id" class="w-full border rounded p-2">
                <option value="">-- Pilih Anime --</option>
                @foreach ($animes as $anime)
                    <option value="{{ $anime->id }}">{{ $anime->title }}</option>
                @endforeach
            </select>
            @error('anime_id') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold mb-1">Episode Number</label>
            <input type="number" wire:model="episode_number" class="w-full border rounded p-2">
            @error('episode_number') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold mb-1">Title</label>
            <input type="text" wire:model="title" class="w-full border rounded p-2">
            @error('title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold mb-1">Stream URL</label>
            <input type="text" wire:model="stream_url" class="w-full border rounded p-2">
            @error('stream_url') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold mb-1">Download URL</label>
            <input type="text" wire:model="download_url" class="w-full border rounded p-2">
            @error('download_url') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Simpan Episode
        </button>
    </form>
</div>
