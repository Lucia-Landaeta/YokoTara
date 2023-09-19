@props(['post'])
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