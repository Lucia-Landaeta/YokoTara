<div>
    <button wire:click="$set('open',true)"
        class="block text-sm text-center ml-4 mt-2 mb-6 bg-transparent hover:bg-cyan-500 text-cyan-700 font-semibold hover:text-white py-2 px-8 border border-cyan-500 hover:border-transparent rounded-xl">Nueva
        Publicación</button>

    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Nueva Publicación
        </x-slot>
        <x-slot name='content'>
            {{-- Datos animal --}}
            <section>
                <h2 class="font-bold">Datos animal</h2>
                <hr class=" mb-4">
                <div class="mb-4">
                    <x-label value="Tipo de animal" />
                    <select wire:model="type_animal"
                        class="w-full mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="">Seleccione un tipo</option>
                        <option value="Perro">Perro</option>
                        <option value="Gato">Gato</option>
                        <option value="Conejo">Conejo</option>
                    </select>
                    <x-input-error class="mt-1" for="type_animal" />
                </div>
                <div class="grid grid-cols-2">
                    <div class="mb-4 mr-3">
                        <x-label value="Género" />
                        <select wire:model="gender"
                            class="w-full mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="">Seleccione un género</option>
                            <option value="Macho">Macho</option>
                            <option value="Hembra">Hembra</option>
                        </select>
                        <x-input-error class="mt-1" for="gender" />
                    </div>
                    <div class="mb-4 ml-3">
                        <x-label value="Edad" />
                        <select wire:model="stage"
                            class="w-full mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                            <option value="">Seleccione un edad</option>
                            <option value="Cachorro">Cachorro</option>
                            <option value="Joven">Joven</option>
                            <option value="Adulto">Adulto</option>
                        </select>
                        <x-input-error class="mt-1" for="stage" />
                    </div>
                </div>
            </section>
            {{-- Datos publicación --}}
            <section>
                <h2 class="font-bold mt-2">Datos de la publicación</h2>
                <hr class=" mb-4">
                <div class="mb-4">
                    <x-label value="Titulo" />
                    <x-input type="text" class="w-full mt-2" wire:model.defer='title' />
                    <x-input-error class="mt-1" for="title" />
                </div>
                <div class="mb-4">
                    <x-label value="Contenido de la publicación" />
                    <textarea rows="6" class="form-control w-full mt-2" wire:model.defer='content'></textarea>
                    <x-input-error class="mt-1" for="content" />
                </div>
                <div class="mb-4">
                    <x-label value="Tipo de publicación" />
                    <select wire:model="type"
                        class="w-full mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        <option value="">Seleccione un tipo</option>
                        <option value="Adopción">Adopción</option>
                        <option value="Perdido">Perdido</option>
                        <option value="Encontrado">Encontrado</option>
                    </select>
                    <x-input-error class="mt-1" for="type" />
                </div>
                <div class="mb-4">
                    {{-- @livewire('select') --}}
                    <livewire:select wire:model='locality' /> 
                    <x-input-error class="mt-1" for="locality" />
                </div>
                <div class="mb-4">
                    <label class="text-sm font-medium text-gray-900">Foto</label>
                    <div class="relative ">
                        <input
                            class="block border border-2 mt-2 pt-1 pl-1 border-gray-300 border-dashed w-full h-32 cursor-pointer rounded-md shadow-sm file:shadow-sm file:cursor-pointer file:shadow-sm file:rounded-md file:border-gray-300 hover:file:bg-blue-50"
                            wire:model='image' id="{{ $identifier }}" type="file">
                        @if ($image)
                            <img class="object-scale-down w-20 h-20 absolute bottom-2 left-2"
                                src="{{ $image->temporaryUrl() }}" alt="">
                        @else
                            <i class="fa-regular fa-file-image text-6xl text-gray-300 absolute bottom-5 left-2/4"></i>
                        @endif
                        <div wire:loading wire:target='image' class=" absolute bottom-4 left-4 items-center mt-3">
                            <svg aria-hidden="true"
                                class="w-6 h-6 mx-2 text-gray-200 animate-spin dark:text-gray-400 fill-yellow-400"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="currentColor" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentFill" />
                            </svg>
                        </div>
                    </div>
                    <x-input-error class="mt-1" for="image" />
                </div>
            </section>
            {{-- Datos casos previos --}}
            @if ($cases_db)
                <section>
                    <h2 class="font-bold mt-2">Datos del caso</h2>
                    <hr class=" mb-4">
                    <div class="mb-4">
                        <x-label value="Pseudonimo" />
                        <x-input type="text" class="w-full mt-2" wire:model.defer='pseudonym' placeholder="Pseudonimo debe ser representativo del caso" />
                        <x-input-error class="mt-1" for="pseudonym" />
                    </div>
                    <p>¿Existe un caso previo relacionado?</p>
                    <div x-data="{ open: false }" class="mt-2">
                        <x-label id="previous_case" />
                        <x-input x-on:click="open = !open" type="checkbox" class="mr-2"
                            wire:model.defer='previous_case' /> Si
                            <x-input-error class="mt-1" for="previous_case" />
                        <div x-show="open" class="mt-2">
                            <select wire:model="case"
                                class="w-full mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <option value="null">Seleccione un tipo</option>
                                @foreach ($cases_db as $case)
                                    <option value="{{ $case->id }}">{{ $case->pseudonym}}</option>
                                @endforeach
                            </select>
                            <x-input-error class="mt-1" for="case" />
                        </div>
                    </div>
                </section>
            @endif

        </x-slot>
        <x-slot name='footer'>
            <x-danger-button class="mx-3" wire:click="$set('open',false)">
                Cancelar
            </x-danger-button>
            <x-button wire:click='save' wire:loading.attr="disabled" wire:target="save, image"
                class="disabled:opacity-25">
                Crear Post
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
