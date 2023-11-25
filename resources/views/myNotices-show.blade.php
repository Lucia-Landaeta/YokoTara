<x-app-layout>
    <div class="h-16"></div>
    <section class="bg-cover mb-0.5 mt-0.5 shadow h-32" style="background-image: url({{ asset('img/cases/port22.jpg') }})">
        <div class="container pt-8">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Mis intereses</h1>
                <p class="text-white text-2xl mb-6"></p>
            </div>
        </div>
    </section>
    @livewire('my-notices-show')

</x-app-layout>