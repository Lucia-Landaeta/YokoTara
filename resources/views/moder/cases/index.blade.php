<x-app-layout>
    <div class="h-16"></div>
    {{-- SECCIÓN PORTADA --}}
    <section class="bg-cover mb-0.5 mt-0.5 shadow h-32" style="background-image: url({{ asset('img/cases/port22.jpg') }})">
        {{-- <div class="container py-32">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl"></h1>
                <p class="text-white text-2xl mb-6"></p>
            </div>
        </div> --}}
    </section>
    <h1 class="container text-gray-500 text-2xl mb-1 mt-4">Casos</h1>
    {{-- Lista casos --}}
    @livewire('moder.show-cases')
</x-app-layout>
