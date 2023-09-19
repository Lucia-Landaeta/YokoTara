<x-app-layout>
        {{-- SECCIÓN PORTADA --}}
        <section class="bg-cover mb-0.5 shadow" style="background-image: url({{ asset('img/posts/portada.jpg') }})">
            <div class="container py-32">
                <div class="w-full md:w-3/4 lg:w-1/2">
                    <h1 class="text-white font-bold text-4xl">Adoptar es un acto de amor</h1>
                    <p class="text-white text-2xl mb-6">Porque ellos se lo merecen</p>
                </div>
            </div>
        </section>
{{-- Componente de filtrado --}}
@livewire('posts-filters')
</x-app-layout>