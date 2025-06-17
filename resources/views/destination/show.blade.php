<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Departures') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if($destination->departures->isEmpty())
                        <p class="text-red-600">Ehhez a célponthoz jelenleg nincs elérhető indulási időpont.</p>
                    @else
                        <ul class="list-disc ml-5">
                            @foreach($destination->departures as $departure)
                                <li>{{$departure->departure_date}}: {{$departure->price}}K</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
