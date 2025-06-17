<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$todo->title}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-between overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">Deadline:
                    {{$todo->deadline}}
                </div>
                <div class="p-6 text-gray-900">Posted by:
                    {{$todo->user->name}}
                </div>
            </div>
            @auth
                @if(auth()->id() === $todo->user_id)
                    <div class="flex justify-center overflow-hidden sm:rounded-lg mb-6 space-x-8">
                        <a href="/todo/{{$todo->id}}/edit">
                            <x-primary-button>Edit</x-primary-button>
                        </a>
                        <form action="{{route('todo.delete', $todo->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <x-primary-button type="submit">Done</x-primary-button>
                        </form>
                    </div>
                @endif
            @endauth
        </div>
    </div>
</x-app-layout>
