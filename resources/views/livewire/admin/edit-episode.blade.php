<div class="max-w-xl mx-auto mt-10">
    <h1 class="text-xl font-bold mb-4">Edit Episode</h1>

    @if (session()->has('success'))
        <div class="p-2 mb-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="update" class="space-y-4">
        <div>
            <label class="block text-sm font-semibold mb-1">Episode ke-</label>
            <input type="number" wire:model="episode_number" class="w-full border p-2 rounded" />
            @error('episode_number') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold mb-1">Judul Episode</label>
            <input type="text" wire:model="title" class="w-full border p-2 rounded" />
            @error('title') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold mb-1">URL Streaming</label>
            <input type="url" wire:model="stream_url" class="w-full border p-2 rounded" />
            @error('stream_url') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-semibold mb-1">URL Download</label>
            <input type="url" wire:model="download_url" class="w-full border p-2 rounded" />
            @error('download_url') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>
        
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
            Update Episode
        </button>
    </form>
</div>
