<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Todos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                    @foreach($todos as $todo)
                        <a href="/todo/{{$todo->id}}">
                        <div class="flex justify-between bg-gray-200 rounded hover:bg-gray-100 items-center h-20 p-4 mb-4">
                            <div>
                                <div>
                                    {{$todo->title}}
                                </div>
                            </div>
                            <div>
                                <p class="text-sm">{{$todo->deadline}}</p>
                            </div>
                        </div>
                        </a>
                    @endforeach
                </div>
            </div>
            {{$todos->links()}}
        </div>
    </div>
</x-app-layout>
