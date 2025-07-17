<div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Edit Anime</h1>

    @if (session()->has('success'))
    <div class="p-4 mb-4 bg-green-100 text-green-800 rounded">
        {{ session('success') }}
    </div>
    @endif

    <form wire:submit.prevent="update">
        @foreach (['title', 'slug', 'description', 'status', 'thumbnail', 'released_year'] as $field)
        <div class="mb-4">
            <label class="block mb-1 capitalize">{{ str_replace('_', ' ', $field) }}</label>
            @if($field === 'description')
            <textarea wire:model="{{ $field }}" class="w-full border rounded p-2"></textarea>
            @elseif($field === 'status')
            <select wire:model="status" class="w-full border rounded p-2">
                <option value="ongoing">Ongoing</option>
                <option value="completed">Completed</option>
            </select>
            @else
            <input type="{{ $field === 'released_year' ? 'number' : 'text' }}" wire:model="{{ $field }}" class="w-full border rounded p-2">
            @endif
        </div>
        @endforeach

        <div class="mb-4">
            <label class="block mb-1">Genres</label>
           <div class="mb-4">
    <label class="block mb-1">Genres</label>
    <div class="grid grid-cols-2 gap-2">
        @foreach ($genres as $genre)
            <label class="inline-flex items-center">
                <input type="checkbox" wire:model="selectedGenres" value="{{ $genre->id }}" class="form-checkbox">
                <span class="ml-2">{{ $genre->name }}</span>
            </label>
        @endforeach
    </div>
</div>

        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
