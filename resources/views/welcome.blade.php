<x-app-layout>
    <div class="h-16"></div>
    {{-- SECCIÓN PORTADA --}}
    <section class="bg-cover mt-0.5" style="background-image: url({{ asset('img/home/portada2.jpg') }})">
        <div class="container py-32">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-4xl">Responsabilidad y amor</h1>
                <p class="text-white text-2xl mb-4">Porque ellos se lo merecen</p>
                <a href="{{ route('posts.index') }}"
                    class="bg-transparent hover:bg-amber-500 text-amber-600 font-semibold hover:text-white py-2 px-4 border border-amber-500 hover:border-transparent rounded-full">
                    Ver publicaciones
                </a>
            </div>
        </div>
    </section>
    {{-- SECCIÓN CONTENIDO --}}
    <section class="mt-16">
        <h1 class="text-cyan-600 text-center text-3xl mb-12">Conocé</h1>
        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-x-6 gap-y-8">
            <a href="{{ route('info') }}">
                <article class="transitionArt">
                    <div class="md:flex md:-mx-4">
                        <div class="w-full h-60 md:mx-4 rounded-xl overflow-hidden bg-cover bg-center"
                            style="background-image: url({{ asset('img/home/content2.jpg') }})">
                            <div class="bg-gray-900 bg-opacity-40 flex h-full">
                                <div class="px-10 max-w-xl text-center">
                                    <h2 class="text-2xl text-white font-bold pt-12">Nosotros</h2>
                                    <p class="mt-2 text-gray-200 font-bold pt-20">¡Conoce quienes somos y nuestros
                                        objetivos!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </a>
            <a href="{{ route('posts.index') }}">
                <article class="transitionArt">
                    <div class="md:flex md:-mx-4">
                        <div class="w-full h-60 md:mx-4 rounded-xl overflow-hidden bg-cover bg-center"
                            style="background-image: url({{ asset('img/home/content4.jpg') }})">
                            <div class="bg-gray-900 bg-opacity-40 flex h-full">
                                <div class="px-10 max-w-xl text-center">
                                    <h2 class="text-2xl text-white font-bold pt-12">Publicaciones</h2>
                                    <p class="mt-2 text-gray-200 font-bold pt-14">Mira las publicaciones de dopciones, perdidos o encontrados.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </a>
            <a href="{{ route('contact.index') }}">
                <article class="transitionArt">
                    <div class="md:flex md:-mx-4">
                        <div class="w-full h-60 md:mx-4 rounded-xl overflow-hidden bg-cover bg-center"
                            style="background-image: url({{ asset('img/home/content3.jpg') }})">
                            <div class="bg-gray-900 bg-opacity-40 flex h-full">
                                <div class="px-10 max-w-xl text-center">
                                    <h2 class="text-2xl text-white font-bold pt-12">Contactanos</h2>
                                    <p class="mt-2 text-gray-200 font-bold pt-16">Ponte en contacto con nosotros por cualquier duda o situación.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </a>
            <a href="{{ route('donations.index') }}">
                <article class="transitionArt">
                    <div class="md:flex md:-mx-4">
                        <div class="w-full h-60 md:mx-4 rounded-xl overflow-hidden bg-cover bg-center"
                            style="background-image: url({{ asset('img/home/content5.jpg') }})">
                            <div class="bg-gray-900 bg-opacity-40 flex h-full">
                                <div class="px-10 max-w-xl text-center">
                                    <h2 class="text-2xl text-white font-bold pt-12">Donaciones</h2>
                                    <p class="mt-2 text-gray-200 font-bold pt-28">¡Recibimos donaciones!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </a>
        </div>
    </section>
    {{-- SECCIÓN PUBICACIONES POSTULACIÓN --}}
    <section class="mt-28 bg-sky-800 py-12 skew-y-1">
        <h1 class="text-center font-bold text-amber-500 text-3xl">¿Querés ayudar?</h1>
        <p class="text-center text-white text-md">Mirá nuestra sección de postulación y fijate como puedes ayudar.</p>
        <div class="flex justify-center mt-4">
            <a href=""
                class="bg-amber-500 hover:bg-amber-600 text-white font-bold py-2 px-4 border-b-4 border-amber-700 hover:border-amber-500 rounded-xl">
                Postulación
            </a>
        </div>
    </section>
    {{-- SECCIÓN PUBLICACIONES RECIENTES --}}
    <section class="mt-24">
        <h1 class="text-center text-3xl text-cyan-600">Publicaciones</h1>
        <p class="text-center text-md mb-4">Las publicaciones más recientes</p>
        {{-- Cards de publicaciones --}}
        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach ($posts as $post)
                <x-own.post-card :post='$post' />
            @endforeach
        </div>
        <div class="text-center py-6 px-6">
            <a href="{{ route('posts.index') }}" class="text-gray-600"> Ver todas las publicaciones</a>
        </div>
    </section>
</x-app-layout>
