<div class="max-w-2xl mx-auto mt-10">
    <h2 class="text-xl font-bold mb-4">Kelola Genre</h2>

    <form wire:submit.prevent="save" class="mb-6">
        <input type="text" wire:model="name" class="w-full p-2 border rounded" placeholder="Nama Genre">
        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <div class="mt-2">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">
                {{ $isEdit ? 'Update' : 'Tambah' }}
            </button>
            @if ($isEdit)
                <button type="button" wire:click="resetInput" class="ml-2 px-4 py-2 bg-gray-500 text-white rounded">
                    Batal
                </button>
            @endif
        </div>
    </form>

    <ul class="space-y-2">
        @foreach ($genres as $genre)
            <li class="flex justify-between items-center bg-gray-100 p-2 rounded">
                <span>{{ $genre->name }}</span>
                <div class="space-x-2">
                    <button wire:click="edit({{ $genre->id }})" class="text-blue-600">Edit</button>
                    <button wire:click="delete({{ $genre->id }})" class="text-red-600"
                        onclick="return confirm('Yakin hapus genre ini?')">Hapus</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>
