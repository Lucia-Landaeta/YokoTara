<x-app-layout>
    <div class="h-16"></div>
    {{-- SECCIÓN PORTADA --}}
    {{-- <section class="bg-cover mb-0.5 mt-0.5 shadow h-32" style="background-image: url({{ asset('img/cases/port71.png') }})"> --}}
        {{-- <div class="container h-32"> --}}
            {{-- <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl"></h1>
                <p class="text-white text-2xl mb-6"></p>
            </div> --}}
        {{-- </div> --}}
    {{-- </section> --}}
    <div class="container">
        <h1 class="text-gray-500 text-2xl mb-1 mt-4">Registros del caso ID: {{$case->id}} Peudonimo:{{$case->pseudonym}}</h1>
        @livewire('moder.show-records', ['case' => $case])
    </div>

</x-app-layout>