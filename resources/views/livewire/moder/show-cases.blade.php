<div>
    <div class="container">
        <table class="w-full border-collapse bg-white rounded-md text-left mt-3 text-sm text-gray-500">
            <thead class="bg-amber-400">
                <tr>
                    <th scope="col" class="p-4 font-medium text-gray-900">Id</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Responsable</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Pseudonimo</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Fecha creación</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Post</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Status</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Deshabilitar</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @forelse ($cases as $case)
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 font-normal text-gray-900">
                            {{ $case['id'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
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
                                @elseif ($case['status']['id'] == 2)
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
                            {{-- @livewire('moder.modal-case', ['case' => $case],key($case->id)) --}}

                            {{-- Asignar caso a un moder --}}
                            @if ($case->status_id == 2 && $case->user_id == null)
                                <button wire:click="$emit('assignCase', {{ $case->id }})"><abbr
                                        title="Tomar caso"><i
                                            class="fa-regular fa-check-double text-gray-500 text-lg font-bold mb-1 hover:text-green-500"></i></button>
                            @endif
                            {{-- Asignar usuario --}}
                            @if ($case->status_id == 1)
                                <button wire:click="modalAssignUSer({{$case->id}})"><abbr title="Asignar usuario"><i
                                            class="fa-solid fa-user-tag text-gray-500 text-lg font-bold mb-1 hover:text-orange-500"></i></button>
                            @endif
                            {{-- Ver registro --}}
                            @if ($case->status_id == 2)
                                <button ><abbr title="Ver registros"><i
                                            class="fa-solid fa-folder text-gray-500 text-lg font-bold mb-1 ml-3 hover:text-blue-500"></i></button>
                            @endif
                            {{-- Deshabilitar --}}
                            <button> <abbr title="Finalizar"><i
                                        wire:click="$emit('finishCase', {{ $case->id }})"
                                        class="fa-regular fa-circle-xmark cursor-pointer text-lg text-gray-500 ml-3 pr-6 hover:text-red-500"></i>
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No existen casos registrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="container bg-white py-4 mt-1 mb-3">
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
                    <option value="{{$user->id}}">{{$user->name}} {{$user->lastname}}&#160 - &#160{{$user->email}}</option>
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
            <x-button wire:click="assignUser({{ $case->id }})" wire:loading.attr="disabled"
                class="disabled:opacity-25">
                Acceptar
            </x-button>

        </x-slot>
    </x-dialog-modal>
</div>
