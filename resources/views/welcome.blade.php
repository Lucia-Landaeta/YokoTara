<x-app-layout>
    {{-- SECCIÓN PORTADA --}}
    <section class="bg-cover" style="background-image: url({{ asset('img/home/portada2.jpg') }})">
        <div class="container py-32">
            <div class="w-full md:w-3/4 lg:w-1/2">
                {{-- <h1 class="text-white font-bold text-4xl">Responsabilidad y amor</h1>
                <p class="text-white text-2xl mb-4">Porque ellos se lo merecen</p>
                <a href="#"
                    class="bg-transparent hover:bg-amber-500 text-amber-600 font-semibold hover:text-white py-2 px-4 border border-amber-500 hover:border-transparent rounded-full">
                    Ver publicaciones
                </a> --}}
            </div>
        </div>
    </section>
    {{-- SECCIÓN CONTENIDO --}}
    <section class="mt-24">
        <h1 class="text-cyan-600 text-center text-3xl mb-6">Contenido</h1>
        <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <a href="">
                <article class="transitionArt">
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/content2.jpg') }}"
                            alt="">
                    </figure>
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">Nosotros</h1>
                    </header>
                    <p class="text-md text-gray-500">¡Conoce quienes somos y nuestros objetivos!</p>
                </article>
            </a>
            <a href="">
                <article class="transitionArt">
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/content4.jpg') }}"
                            alt="">
                        <header class="mt-2">
                            <h1 class="text-center text-xl text-gray-700">Publicaciones</h1>
                        </header>
                        <p class="text-md text-gray-500">Mira las publicaciones de dopciones, perdidos o encontrados.
                        </p>
                    </figure>
                </article>
            </a>
            <a href="">
                <article class="transitionArt">
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/content3.jpg') }}"
                            alt="">
                        <header class="mt-2">
                            <h1 class="text-center text-xl text-gray-700">Contactanos</h1>
                        </header>
                        <p class="text-md text-gray-500">Ponte en contacto con nosotros por cualquier duda o situación.
                        </p>
                    </figure>
                </article>
            </a>
            <a href="">
                <article class="transitionArt">
                    <figure>
                        <img class="rounded-xl h-36 w-full object-cover" src="{{ asset('img/home/content5.jpg') }}"
                            alt="">
                        <header class="mt-2">
                            <h1 class="text-center text-xl text-gray-700">Donaciones</h1>
                        </header>
                        <p class="text-md text-gray-500">¡Recibimos donaciones!</p>
                    </figure>
                </article>
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
                <article class="card">
                    <img class="h-36 w-full object-cover"
                        src="{{ $post->image ? Storage::url($post->image->url) : 'https://imagen_prueba.com' }}"
                        alt="">
                    <div class="px-6 py-4">
                        <div class="flex justify-between items-align">
                            <p class="card-title text-red-400 text-xs font-bold flex justify-around">{{ $post->type }}
                            </p>
                            <p class="card-title text-gray-400 text-xs flex justify-around">{{ $post->date_publish }}
                            </p>
                        </div>
                        <h1 class="card-title">{{ Str::limit($post->title), 50 }}</h1>
                        <div class="flex justify-between">
                            {{-- Genero --}}
                            <ul class="flex justify-around">
                                <li class="mr-2 text-xl"><abbr title="Hembra"><i
                                            class="fa fa-venus {{ $post->animal->gender == 'Hembra' ? 'text-red-400' : 'text-gray-400' }}"></i></abbr>
                                </li>
                                <li class="text-xl"><abbr title="Macho"><i
                                            class="fa fa-mars {{ $post->animal->gender == 'Macho' ? 'text-red-400' : 'text-gray-400' }}"></i>
                                </li>
                            </ul>
                            {{-- Etapa-edad --}}
                            <ul class="flex justify-around">
                                <li class="mr-3 mt-1 text-sm"><abbr title="Cachorro"><i
                                            class="fa fa-paw {{ $post->animal->stage == 'Cachorro' ? 'text-red-400' : 'text-gray-400' }}"></i>
                                </li>
                                <li class="mr-3 mt-0.5 text-md"><abbr title="Joven"><i
                                            class="fa fa-paw {{ $post->animal->stage == 'Joven' ? 'text-red-400' : 'text-gray-400' }}"></i>
                                </li>
                                <li class="mr-3 text-lg"><abbr title="Adulto"><i
                                            class="fa fa-paw {{ $post->animal->stage == 'Adulto' ? 'text-red-400' : 'text-gray-400' }}"></i>
                                </li>
                            </ul>
                        </div>
                        <a href="{{ route('posts.show', $post->id) }}"
                            class="block text-sm text-center w-full mt-2 bg-transparent hover:bg-cyan-500 text-cyan-700 font-semibold hover:text-white py-1 px-4 border border-cyan-500 hover:border-transparent rounded">
                            Ver más
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="text-center py-6 px-6">
            <a href="{{ route('posts.index') }}" class="text-gray-600"> Ver todas las publicaciones</a>
        </div>
    </section>

    {{-- REVISAR TOOLTIP PARA INCORPORAR --}}
    {{-- <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div class="group cursor-pointer relative inline-block border-b border-gray-400 w-28 text-center">Hover over me
            <div class="opacity-0 w-28 bg-black text-white text-center text-xs rounded-lg py-2 absolute z-10 group-hover:opacity-100 bottom-full -left-1/2 ml-14 px-3 pointer-events-none">
              Tooltip center
              <svg class="absolute text-black h-2 w-full left-0 top-full" x="0px" y="0px" viewBox="0 0 255 255" xml:space="preserve"><polygon class="fill-current" points="0,0 127.5,127.5 255,0"/></svg>
            </div>
          </div>
        </div> --}}
</x-app-layout>
