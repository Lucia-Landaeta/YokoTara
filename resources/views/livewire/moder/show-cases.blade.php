<div>
    <div class="container">
        {{-- Search --}}
        <div class="px-2 pt-1 pb-4">
            <div wire:model='search' action="" class="relative ">
                <input type="search" placeholder="Buscar pseudonimo de caso"
                    class="peer cursor-pointer relative z-10 h-12 w-full rounded-full border bg-transparent pl-16 outline-none focus:cursor-text focus:border-cyan-100 focus:pl-16 focus:pr-4" />
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="absolute inset-y-0 my-auto  h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 peer-focus:border-orange-300 border-gray-500 peer-focus:stroke-orange-500"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div>
        {{-- filtros --}}
        <div class="container flex">
            <button
                class="bg-transparent font-bold hover:bg-orange-200 h-12 rounded-lg text-orange-500 py-2 px-4 rounded-2xl mx-2 hover:bg-opacity-60  p-2"
                wire:click='resetFilters'>
                <i class="fa-regular fa-rectangle-list mr-1"></i>
                Todos los casos
            </button>
            <button
                class="bg-transparent font-bold hover:bg-orange-200 h-12 rounded-lg text-orange-500 py-2 px-4 rounded-2xl mx-2 hover:bg-opacity-60 p-2"
                x-on:click="open=!open" wire:click="myCasesSetTrue()">
                <i class="fa-solid fa-cat mr-2 "></i>
                Mis casos
            </button>
            <div class="relative" x-data="{ open: false }">
                {{-- Dropdown --}}
                <button
                    class="bg-transparent font-bold hover:bg-orange-200 h-12 rounded-lg text-orange-500 py-2 px-4 rounded-2xl mx-2 hover:bg-opacity-60  p-2"
                    x-on:click="open=!open">
                    <i class="fa-solid fa-cat mr-2 "></i>
                    Status
                    <i class="fa-solid fa-caret-down text-orange-500 ml-2 invisible sm:visible"></i>
                </button>
                {{-- Dropdown body --}}
                <div class="absolute right-0 w-40 mt-1 py-2 bg-white bg-opacity-60 rounded shadow-xl" x-show="open"
                    x-on:click.away="open=false">
                    <a class="cursor-pointer transition-colors block py-2 px-4 text-sm text-gray-900 font-bold rounded hover:bg-orange-400 hover:text-white py-3"
                        wire:click="$set('status',2)" x-on:click="open=false">Control</a>
                    <hr class="py-2">
                    <a class="cursor-pointer transition-colors block py-2 px-4 text-sm text-gray-900 font-bold rounded hover:bg-orange-400 hover:text-white py-3"
                        wire:click="$set('status',1)" x-on:click="open=false">Activo</a>
                    <hr class="py-2">
                    <a class="cursor-pointer transition-colors block py-2 px-4 text-sm text-gray-900 font-bold rounded hover:bg-orange-400 hover:text-white py-3"
                        wire:click="$set('status',3)" x-on:click="open=false">Finalizados</a>
                </div>
            </div>
            {{-- Tags --}}
            <div class="ml-9 pt-2 border-l-2 pl-9">
                @if ($status == 2)
                    <span
                        class="items-center gap-1 rounded-full bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-600">Control
                        <i class="fa-regular fa-circle-xmark text-base cursor-pointer ml-1 pt-1"
                            wire:click="$set('status',0)"></i></span>
                @endif
                @if ($status == 1)
                    <span
                        class="items-center gap-1 rounded-full bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-600">Activo
                        <i class="fa-regular fa-circle-xmark text-base cursor-pointer ml-1 pt-1"
                            wire:click="$set('status',0)"></i></span>
                @endif
                @if ($status == 3)
                    <span
                        class="items-center gap-1 rounded-full bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-600">Finalizado
                        <i class="fa-regular fa-circle-xmark text-base cursor-pointer ml-1 pt-1"
                            wire:click="$set('status',0)"></i></span>
                @endif
            </div>
            <div class="ml-3 pt-2 ">
                @if ($myCasesTag == true)
                    <span
                        class="items-center gap-1 rounded-full bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-600">Mis casos
                        <i class="fa-regular fa-circle-xmark cursor-pointer ml-1 pt-1 text-base"
                            wire:click="myCasesSetFalse()"></i></span>
                @endif
            </div>
        </div>
        {{-- table --}}
        <table class="w-full border-collapse bg-white rounded-md text-left mt-3 text-sm text-gray-500">
            <thead class="bg-amber-400">
                <tr>
                    <th scope="col" class="p-4 pl-8 font-medium text-gray-900">Responsable</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Pseudonimo</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Fecha creación</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Post</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Status</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Operaciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @forelse ($cases as $case)
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 pl-8 font-normal text-gray-900">
                            @if ($case->user)
                                <p class="font-bold text-orange-500 cursor-pointer hover:text-cyan-600"
                                    wire:click="findUser({{ $case['user_id'] }})" class="cursor-pointer">
                                    {{ $case->user->name }} {{ $case->user->lastname }}</p>
                            @else
                                <p class="font-bold text-green-500">Libre</p>
                            @endif

                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{ $case['pseudonym'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{ $case->dateFormat($case->date) }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            <p class="font-bold text-orange-500 cursor-pointer hover:text-cyan-600"
                                wire:click="findPost({{ $case->post_id }})" class="cursor-pointer">
                                {{ $case->post_id }}</p>
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            @if ($case['status_id'] == 1)
                                <span
                                    class="items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                @elseif ($case['status_id'] == 2)
                                    <span
                                        class="items-center gap-1 rounded-full bg-orange-50 px-2 py-1 text-xs font-semibold text-orange-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span>
                                    @else
                                        <span
                                            class="items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                            <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
                            @endif
                            {{ $case['status']['name'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{-- Asignar caso a un moder --}}
                            @if ($case->status_id == 2 && $case->user_id == null)
                                <button wire:click="$emit('assignCase', {{ $case->id }})"  wire:key="{{ $case->id }}"><abbr
                                        title="Tomar caso"><i
                                            class="fa-regular fa-check-double text-gray-500 text-lg font-bold mb-1 hover:text-green-500"></i></button>
                            @endif
                            {{-- Asignar usuario --}}
                            @if ($case->status_id == 1)
                                <button> <abbr title="Asignar usuario"><i
                                            wire:click="modalAssignUSer({{ $case->id }})"
                                            class="fa-solid fa-user-tag text-gray-500 text-lg font-bold mb-1 hover:text-orange-500"></i></button>
                            @endif
                            {{-- Ver registro --}}
                            @if ($case->status_id != 1)
                                <button><abbr title="Ver registros"><i
                                            wire:click="redirectRecords({{ $case->id }})"
                                            class="fa-solid fa-folder text-gray-500 text-lg font-bold mb-1 ml-3 hover:text-blue-500"></i></button>
                            @endif
                            {{-- Deshabilitar --}}
                            <button> <abbr title="Finalizar"><i wire:click="$emit('finishCase', {{ $case->id }})"
                                        class="fa-regular fa-circle-xmark cursor-pointer text-lg text-gray-500 ml-3 pr-6 hover:text-red-500"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-gray-400 p-3" colspan="4"><i class="fa-solid fa-frog mx-3 "></i>No hay
                            existen casos
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="container bg-white py-4 mt-1">
            {{ $cases->links() }}
        </div>
    </div>
    {{-- Modals --}}
    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            <span class="text-cyan-600" wire:model="name_user">{{ $name_user }}</span>
            <hr class="mt-2">
            <x-danger-button class="absolute top-2 right-2 mx-3" wire:click="$set('open',false)">
                X
            </x-danger-button>
        </x-slot>
        <x-slot name='content'>
            <span class="font-bold text-lg">Correo: </span><span class="text-lg"
                wire:model="email_user">{{ $email_user }}</span><br>
            <span class="font-bold text-lg">Teléfono: </span><span class="text-lg"
                wire:model="phone_user">{{ $phone_user }}</span><br>
            <span class="font-bold text-lg">Localidad: </span><span class="text-lg"
                wire:model="locality_user">{{ $locality_user }}</span>
        </x-slot>
        <x-slot name='footer'>
        </x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model='openP'>
        <x-slot name='title'>
            Información de Publicación
            <hr class="mt-2">
            <x-danger-button class="absolute top-2 right-2 mx-3" wire:click="$set('openP',false)">
                X
            </x-danger-button>
        </x-slot>
        <x-slot name='content'>
            <span class="font-bold text-lg">Titulo: </span><span class="text-lg"
                wire:model="title_post">{{ $title_post }}</span><br>
            <span class="font-bold text-lg">Descripción: </span><span class="text-lg"
                wire:model="description_post">{{ $description_post }}</span><br>
            <span class="font-bold text-lg">Tipo de publicación: </span><span class="text-lg"
                wire:model="type_post">{{ $type_post }}</span><br>
            <span class="font-bold text-lg">Localidad: </span><span class="text-lg"
                wire:model="locality_post">{{ $locality_post }}</span><br>
            <span class="font-bold text-lg">Fecha de publicación: </span><span class="text-lg"
                wire:model="date_post">{{ $date_post }}</span><br>
            <span class="font-bold text-lg">Usuario: </span><span class="text-lg"
                wire:model="user_post">{{ $user_post }}</span>
        </x-slot>
        <x-slot name='footer'>
        </x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model='openU'>
        <x-slot name='title'>
            <h2 class="font-bold text-green-500">Asignar usuario interesado</h2>
        </x-slot>
        <x-slot name='content'>
            <select wire:model="interested_user"
                class="w-full mt-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                <option value="">Seleccione un usuario</option>
                @if ($users)
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }} {{ $user->lastname }}&#160 -
                            &#160{{ $user->email }}</option>
                    @endforeach
                @endif

            </select>
            <x-input-error class="mt-1" for="interested_user" />

            <x-label class="mt-4" value="Registre la razón de aceptación u observaciones realizadas" />
            <textarea rows="6" class="form-control w-full mt-2" wire:model.defer='reason'></textarea>
            <x-input-error class="mt-1" for="reason" />
        </x-slot>
        <x-slot name='footer'>
            <x-danger-button class="mx-3" wire:click="$set('openU',false)">
                Cancelar
            </x-danger-button>
            @if ($case)
                <x-button wire:click="assignUser({{ $case->id }})" wire:loading.attr="disabled"
                    class="disabled:opacity-25">
                    Aceptar
                </x-button>
            @endif

        </x-slot>
    </x-dialog-modal>
</div>
