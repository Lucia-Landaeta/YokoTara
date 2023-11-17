<div>
    <button wire:click="$set('open',true)"
        class="block text-sm text-center ml-2 mt-6 mb-3 bg-transparent hover:bg-cyan-500 text-cyan-700 font-semibold hover:text-white py-2 px-8 border border-cyan-500 hover:border-transparent rounded-xl">
        Nuevo Registro</button>
    <table class="w-full border-collapse bg-white rounded-md text-left mt-3 text-sm text-gray-500">
        <thead class="bg-amber-400">
            <tr>
                <th scope="col" class="p-4 font-medium text-gray-900">Id</th>
                <th scope="col" class="p-4 font-medium text-gray-900">Fecha creación</th>
                <th scope="col" class="p-4 font-medium text-gray-900">Situación</th>
                <th scope="col" class="p-4 font-medium text-gray-900">Observación</th>
                <th scope="col" class="p-4 font-medium text-gray-900">Usuario responsable</th>
                <th scope="col" class="p-4 font-medium text-gray-900">Fotos</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            @forelse ($records as $record)
                <tr class="hover:bg-gray-50">
                    <td class="p-4 font-normal text-gray-900">
                        {{ $record->id }}
                    </td>
                    <td class="p-4 font-normal text-gray-900">
                        {{ $record->date }}
                    </td>
                    <td class="p-4 font-normal text-gray-900">
                        {{ $record->situation }}
                    </td>
                    <td class="p-4 font-normal text-gray-900">
                        {{ $record->observation }}
                    </td>
                    <td class="p-4 font-normal text-gray-900">
                        <p class="font-bold text-orange-500 cursor-pointer hover:text-cyan-600" class="cursor-pointer">
                            {{ $record->user->name }} {{ $record->user->lastname }}</p>
                    </td>
                    <td class="p-4 font-normal text-gray-900">
                        {{-- <img class="h-36 w-full object-cover"
                        src="{{ $record->images ? Storage::url($record->images[0]->url) : 'https://imagen_prueba.com' }}"
                        alt=""> --}}
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="text-gray-400 p-3" colspan="4"><i class="fa-solid fa-frog mr-3"></i>No hay registros
                        actualmente</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Nuevo registro
        </x-slot>
        <x-slot name='content'>
            <div class="mb-4">
                <x-label value="Situación" />
                <select wire:model="situation"
                    class="w-full mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="">Seleccione la situación en la que se realiza el registro</option>
                    @foreach ($situations as $situation)
                        <option value="{{ $situation }}">{{ $situation }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-1" for="situation" />
            </div>
            <div class="mb-4">
                <x-label value="Observación" />
                <textarea rows="6" class="form-control w-full mt-2" wire:model.defer='observation'></textarea>
                <x-input-error class="mt-1" for="observation" />
            </div>
            <div class="mb-4">
                <x-label value="Usuario responsable" />
                <select wire:model="user"
                    class="w-full mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                    <option value="">Seleccione al usuario responsable</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }} {{ $user->lastname }}</option>
                    @endforeach
                </select>
                <x-input-error class="mt-1" for="user" />
            </div>
            {{-- Imagen --}}
            <div class="mb-4">
                <label class="text-sm font-medium text-gray-900">Foto</label>
                <div class="relative ">
                    <input
                        class="block border border-2 mt-2 pt-1 pl-1 border-gray-300 border-dashed w-full h-36 cursor-pointer rounded-md shadow-sm file:shadow-sm file:cursor-pointer file:shadow-sm file:rounded-md file:border-gray-300 hover:file:bg-blue-50 relative"
                        wire:model='images' id="{{ $identifier }}" type="file" multiple>
                    @if ($images)
                        {{-- @foreach ($images as $image)
                            @if (substr($image->getFilename(), strrpos($image->getFilename(), '.')) != '.pdf')
                                <img class="object-scale-down w-16 h-16 absolute bottom-2 left-2"
                                    src="{{ $image->temporaryUrl() }}" alt="">
                            @endif
                        @endforeach --}}
                        <div class="grid grid-cols-4 gap-4 relative bottom-20 left-2">
                            @for ($i = 0; $i <= (count($images)-1)&&$i<4; $i++)
                                <div>
                                    @if (substr($images[$i]->getFilename(), strrpos($images[$i]->getFilename(), '.')) != '.pdf')
                                        <img class="object-scale-down w-16 h-16 "
                                            src="{{ $images[$i]->temporaryUrl() }}" alt="">
                                    @endif
                                </div>
                            @endfor
                        </div>
                    @else
                        <i class="fa-regular fa-file-image text-6xl text-gray-300 absolute bottom-5 left-2/4"></i>
                    @endif

                </div>
                <div wire:loading wire:target='images' class=" absolute bottom-4 left-4 items-center mt-3">
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
                <x-input-error class="mt-1" for="images" />
                <x-input-error class="mt-1" for="images.*" />
            </div>
            @livewire('images-upload')
        </x-slot>
        <x-slot name='footer'>
            <x-danger-button class="mx-3" wire:click="$set('open',false)">
                Cancelar
            </x-danger-button>
            <x-button wire:click='save' wire:loading.attr="disabled" wire:target="save, image"
                class="disabled:opacity-25">
                Crear Registro
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
