<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Images') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">

                <form method="GET" class="mb-6 flex flex-wrap gap-4">
                    <input type="text" name="title" value="{{ request('title') }}" placeholder="Cím alapján szűrés" class="border px-3 py-2 rounded" />

                    <select name="sort" class="border px-3 py-2 rounded">
                        <option value="created_at" {{ request('sort') == 'created_at' ? 'selected' : '' }}>Date</option>
                        <option value="title" {{ request('sort') == 'title' ? 'selected' : '' }}>Title</option>
                    </select>

                    <select name="direction" class="border px-3 py-2 rounded">
                        <option value="asc" {{ request('direction') == 'asc' ? 'selected' : '' }}>Up</option>
                        <option value="desc" {{ request('direction') == 'desc' ? 'selected' : '' }}>Down</option>
                    </select>

                    <x-primary-button type="submit">Filter</x-primary-button>
                </form>

                {{-- Képek megjelenítése --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                    @forelse ($images as $image)
                        <div class="border rounded p-3 shadow">
                            <img src="{{ asset('storage/' . $image->path) }}" alt="{{ $image->title }}" class="w-full h-48 object-cover mb-2 rounded">
                            <h3 class="font-semibold">{{ $image->title }}</h3>
                            <p class="text-sm text-gray-500">{{ $image->created_at->format('Y.m.d H:i') }}</p>
                        </div>
                    @empty
                        <p>No find.</p>
                    @endforelse
                </div>

                <div class="mt-6">
                    {{ $images->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
