<div>
    <div class="bg-orange-200 py-4 mb-6 shadow">
        <div class="container flex">
            <button class="btn-transparent" wire:click='resetFilters'>
                <i class="fa-regular fa-rectangle-list mr-1"></i>
                Todas las publicaciones
            </button>
            {{-- Botón-Dropdown/alpine --}}
            <div class="relative" x-data="{ open: false }">
                <button class="btn-transparent" x-on:click="open=!open">
                    <i class="fa-solid fa-cat mr-2 "></i>
                    Tipo
                    <i class="fa-solid fa-caret-down text-sky-700 ml-2"></i>
                </button>
                {{-- Dropdown body --}}
                <div class="absolute right-0 w-40 mt-1 py-2 bg-white bg-opacity-60 rounded shadow-xl" x-show="open"
                    x-on:click.away="open=false">
                    <a class="btn-dropdown" wire:click="$set('type','En adopción')" x-on:click="open=false">En
                        adopción</a>
                    <div class="py-2">
                        <hr>
                    </div>
                    <a class="btn-dropdown" wire:click="$set('type','Encontrado')" x-on:click="open=false">Perdidos</a>
                    <div class="py-2">
                        <hr>
                    </div>
                    <a class="btn-dropdown" wire:click="$set('type','Transito')" x-on:click="open=false">Encontrados</a>
                </div>
            </div>
            {{-- Botón-Dropdown/alpine --}}
            <div class="relative" x-data="{ open: false }">
                <button class="btn-transparent" x-on:click="open=!open">
                    <i class="fa-solid fa-dog mr-1"></i>
                    Tiempo
                    <i class="fa-solid fa-caret-down text-sky-700 ml-2"></i>
                </button>
                {{-- Dropdown body --}}
                <div class="absolute right-0 w-40 mt-1 py-2 bg-white bg-opacity-60 rounded shadow-xl" x-show="open"
                    x-on:click.away="open=false">
                    <a class="btn-dropdown" wire:click="$set('time','desc')" x-on:click="open=false">Más recientes</a>
                    <div class="py-2">
                        <hr>
                    </div>
                    <a class="btn-dropdown" wire:click="$set('time','asc')" x-on:click="open=false">Más antiguos</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Cards posts --}}
    <div class="container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8 pb-3">
        @foreach ($posts as $post)
            <x-own.post-card :post='$post' />
        @endforeach
    </div>
</div>
