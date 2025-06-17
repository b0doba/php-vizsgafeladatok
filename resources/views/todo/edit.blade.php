<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Todo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    <form action="{{route('todo.update', $todo->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <x-input-label value="Title"></x-input-label>
                        <input type="text" id="title" name="title" value="{{$todo->title}}" class="mb-4 rounded w-48 h-12 bg-gray-100 border-2 border-gray-600">
                        <x-input-label value="Priority"></x-input-label>
                        <input type="number" id="priority" name="priority" value="{{$todo->priority}}" class="mb-4 rounded w-48 h-12 bg-gray-100 border-2 border-gray-600">
                        <x-input-label value="Deadline"></x-input-label>
                        <input type="date" id="deadline" name="deadline" value="{{$todo->deadline}}" class="mb-4 rounded w-48 h-12 bg-gray-100 border-2 border-gray-600">
                        <div>
                            <x-secondary-button type="submit">Update</x-secondary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
