<x-app-layout>
    <div class="h-16"></div>
    <div class="container">
        <h1 class="text-gray-500 text-2xl mb-1 mt-4">Registros del caso : {{$case->pseudonym}}</h1>
        @livewire('moder.show-records', ['case' => $case])
    </div>

</x-app-layout>