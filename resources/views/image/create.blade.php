<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload Image') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{route('image.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-input-label value="Upload"></x-input-label>
                        <input class="mb-6 rounded w-48 h-12 border-2 border-gray-600 hover:bg-gray-500" type="file" id="image" name="image">
                        <x-input-label value="Image Title"></x-input-label>
                        <input class="mb-6 rounded px-4 w-48 h-12 border-2 border-gray-600 hover:bg-gray-500" type="text" id="title" name="title">
                        <x-input-label value="Description"></x-input-label>
                        <input class="mb-6 rounded px-4 w-48 h-12 border-2 border-gray-600 hover:bg-gray-500" type="text" id="description" name="description">
                        <div>
                            <x-primary-button type="submit">Upload</x-primary-button>
                        </div>
                        <x-input-error :messages="$errors->all()"></x-input-error>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
