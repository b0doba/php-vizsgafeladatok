<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Destinations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900">
                        @foreach($destinations as $destination)
                            <a href="/destination/{{$destination->id}}">
                                <div class="flex items-center bg-gray-50 h-20 p-4 rounded-lg mb-4 hover:bg-gray-100">
                                        {{$destination->destination}}, {{$destination->transport}}
                                </div>
                            </a>
                        @endforeach
                </div>
            </div>
    {{$destinations->links()}}
        </div>
    </div>
</x-app-layout>
