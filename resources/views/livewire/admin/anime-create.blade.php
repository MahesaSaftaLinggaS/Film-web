<div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Tambah Anime</h1>

    @if (session()->has('success'))
        <div class="p-4 mb-4 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label class="block mb-1">Judul</label>
            <input type="text" wire:model="title" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Slug</label>
            <input type="text" wire:model="slug" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Deskripsi</label>
            <textarea wire:model="description" class="w-full border rounded p-2"></textarea>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Status</label>
            <select wire:model="status" class="w-full border rounded p-2">
                <option value="">Pilih status</option>
                <option value="ongoing">Ongoing</option>
                <option value="completed">Completed</option>
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-1">Thumbnail URL</label>
            <input type="text" wire:model="thumbnail" class="w-full border rounded p-2">
        </div>

        <div class="mb-4">
            <label class="block mb-1">Tahun Rilis</label>
            <input type="number" wire:model="released_year" class="w-full border rounded p-2">
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
