<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recommended activity:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 font-bold">
                    {{$activity->name}}
                </div>
                <a href="/category/{{$activity->category->id}}">
                    <div class="p-6 text-gray-900">

                        Category: {{$activity->category->name}}
                    </div>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
