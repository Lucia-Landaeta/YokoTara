<x-app-layout>
    <div class="container pb-4">
        <div class="max-w rounded overflow-hidden shadow-lg bg-white mt-5 mr-4 px-6 py-4">
            <h1 class="font-bold text-cyan-600 text-2xl mb-5">{{ $post->title }}</h1>
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="mr-4">
                    <img class="w-full object-cover" src="{{ Storage::url($post->image->url) }}"
                        alt="Sunset in the mountains">
                </div>
                <div class="">
                    <div class="flex mb-5">
                        <ul class="flex items-center">
                            <li class="mr-4 text-2xl">
                                <div class="flex items-center mt-3 md:mt-1">
                                    <img class="w-6 h-6 object-cover rounded-full shadow-lg mr-2"
                                        src="{{ $post->user->profile_photo_url }}" alt="">
                                    <p class="text-sm text-gray-500">{{ $post->user->name }}</p>
                                </div>
                            </li>
                            <li class="text-2xl ml-4 mt-px">
                                <p class="text-sm text-gray-500"> <i
                                        class="fa-regular fa-calendar-days text-sky-700"></i>&ensp;{{ $post->dateFormat() }}
                                    -
                                    <span class="font-bold">{{ $post->locality->name }}</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    {{-- <section class="ml-2 md:ml-7 mb-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 mr-0 pr-0">
                            <div class="flex items-center mt-3 md:mt-1">
                                <img class="w-6 h-6 object-cover rounded-full shadow-lg mr-2"
                                    src="{{ $post->user->profile_photo_url }}" alt="">
                                <p class="text-sm text-gray-500">{{ $post->user->name }}</p>
                            </div>
                            <div class="mt-2 md:mt-1">
                                <p class="text-sm text-gray-500"> <i
                                        class="fa-regular fa-calendar-days text-sky-700"></i>&ensp;{{ $post->dateFormat() }} -
                                    {{ $post->locality->name }}
                                </p>
                            </div>
                        </div>
                    </section> --}}
                    <section class="ml-2 md:ml-7">
                        <p class="font-bold text-xl text-red-400 mb-3">{{ $post->type }}</p>
                        <h2 class="font-bold text-lg">Tipo</h2>
                        <p class="text-gray-700 text-base">
                            {{ $post->animal->type }}
                        </p>
                        <h2 class="font-bold text-lg mt-3">Descripción</h2>
                        <p class="text-gray-700 text-base">
                            {{ $post->description }}
                        </p>
                        {{-- gender --}}
                        <h2 class="font-bold text-lg mt-3 mb-1">Género</h2>
                        <div class="flex ">
                            <ul class="flex">
                                <li class="mr-2 text-2xl">
                                    <abbr title="Hembra"><i
                                            class="fa fa-venus {{ $post->animal->gender == 'Hembra' ? 'text-red-400' : 'text-gray-400' }}"></i></abbr>
                                </li>
                                <li class="text-2xl">
                                    <abbr title="Macho"><i
                                            class="fa fa-mars {{ $post->animal->gender == 'Macho' ? 'text-red-400' : 'text-gray-400' }}"></i>
                                </li>
                            </ul>
                        </div>
                        {{-- stage --}}
                        <h2 class="font-bold text-lg mt-3">Etapa</h2>
                        <ul class="flex">
                            <li class="mr-3 mt-1 text-lg">
                                <abbr title="Cachorro"><i
                                        class="fa fa-paw {{ $post->animal->stage == 'Cachorro' ? 'text-red-400' : 'text-gray-400' }}"></i>
                            </li>
                            <li class="mr-3 mt-0.5 text-xl">
                                <abbr title="Joven"><i
                                        class="fa fa-paw {{ $post->animal->stage == 'Joven' ? 'text-red-400' : 'text-gray-400' }}"></i>
                            </li>
                            <li class="mr-3 text-2xl">
                                <abbr title="Adulto"><i
                                        class="fa fa-paw {{ $post->animal->stage == 'Adulto' ? 'text-red-400' : 'text-gray-400' }}"></i>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
        {{-- <div class="px-6 pt-4 pb-2">
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
            <span
                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div> --}}
    </div>
    <section>
        <aside class="container mt-8 pb-3">
            <hr class="shadow shadow-red-200">
            <h3 class="font-bold text-sm text-gray-500 mt-5 mb-4">Publicaciones similares</h3>
            <div>
                @if (count($similar) != 0)
                    <div
                        class="w-15 mb-5 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-x-6 gap-y-8">
                        @foreach ($similar as $post)
                            <x-own.post-mini-card :post='$post' />
                        @endforeach
                    </div>
                @else
                    <p class="ml-7 mt-4 mb-4 text-sm text-gray-400">
                        <i class="fa-solid fa-frog mr-3"></i>No hay publicaciones similares
                    </p>
                @endif

            </div>

        </aside>
    </section>
</x-app-layout>
