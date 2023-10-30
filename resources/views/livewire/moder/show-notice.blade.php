<div>
    <div class="container">
        <table class="w-full border-collapse bg-white rounded-md text-left mt-3 text-sm text-gray-500">
            <thead class="bg-amber-400">
                <tr>
                    <th scope="col" class="p-4 font-medium text-gray-900">Id</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">description</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Número de contacto</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Usuario</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Post</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Manejo de aviso</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @forelse ($notices as $notice)
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 font-normal text-gray-900">
                            {{ $notice->id }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            @if ($notice->description)
                            {{ $notice->description }}
                            @else
                                <p>' No se agrego una descripción '</p>
                            @endif
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{ $notice->contact_number }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            <p class="font-bold text-orange-500 cursor-pointer hover:text-cyan-600" wire:click="findUser({{ $notice['user_id'] }})" class="cursor-pointer">
                                {{ $notice->user->name }} {{ $notice->user->lastname }}</p>
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            <p class="font-bold text-orange-500 cursor-pointer hover:text-cyan-600" wire:click="findPost({{ $notice['post_id'] }})" class="cursor-pointer">
                                {{ $notice->post_id }}</p>
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            <button wire:click="acceptModal({{$notice}})" class="text-emerald-500 text-base/6 hover:text-green-300 font-bold mb-1">Aceptar</button> <br>
                            <button wire:click="rejectModal({{$notice}})" class="text-red-600 text-base/6 hover:text-red-300 font-bold">Rechazar</button>
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
            {{ $notices->links() }}
        </div>
    </div>

    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Información de <span wire:model="name_user">{{ $name_user }}</span><span wire:model="lastname_user"> {{ $lastname_user }}</span>
            <hr class="mt-2">
            <x-danger-button class="absolute top-2 right-2 mx-3" wire:click="$set('open',false)">
                X
            </x-danger-button>
        </x-slot>
        <x-slot name='content'>
            <span class="font-bold text-lg">Correo: </span><span class="text-lg" wire:model="email_user">{{ $email_user }}</span><br>
            <span class="font-bold text-lg">Teléfono registrado: </span><span class="text-lg" wire:model="contact_number_user">{{ $contact_number_user }}</span><br>
            <span class="font-bold text-lg">Localidad: </span><span class="text-lg" wire:model="locality_user">{{ $locality_user }}</span>
        </x-slot>
        <x-slot name='footer'>
        </x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model='openP'>
        <x-slot name='title'>
            Información de Publicación <hr class="mt-2">
            <x-danger-button class="absolute top-2 right-2 mx-3" wire:click="$set('openP',false)">
                X
            </x-danger-button>
        </x-slot>
        <x-slot name='content'>
            <span class="font-bold text-lg">Titulo: </span><span class="text-lg" wire:model="title_post">{{ $title_post }}</span><br>
            <span class="font-bold text-lg">Descripción: </span><span class="text-lg" wire:model="description_post">{{ $description_post }}</span><br>
            <span class="font-bold text-lg">Tipo de publicación: </span><span class="text-lg" wire:model="type_post">{{ $type_post }}</span><br>
            <span class="font-bold text-lg">Localidad: </span><span class="text-lg" wire:model="locality_post">{{ $locality_post }}</span><br>
            <span class="font-bold text-lg">Fecha de publicación: </span><span class="text-lg" wire:model="date_post">{{ $date_post }}</span><br>
            <span class="font-bold text-lg">Usuario: </span><span class="text-lg" wire:model="user_post">{{ $user_post }}</span>
        </x-slot>
        <x-slot name='footer'>
        </x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model='openAccept'>
        <x-slot name='title'>
            <h2 class="font-bold text-green-500">Aceptación de aviso de interés</h2>
        </x-slot>
        <x-slot name='content'>
            <x-label value="Registre la razón de aceptación u observaciones realizadas" />
            <textarea rows="6" class="form-control w-full mt-2" wire:model.defer='reason'></textarea>
            <x-input-error class="mt-1" for="reason" />
        </x-slot>
        <x-slot name='footer'>
            <x-danger-button class="mx-3" wire:click="$set('openAccept',false)">
                Cancelar
            </x-danger-button>
            <x-button wire:click="accept({{$notice->id}})" wire:loading.attr="disabled" class="disabled:opacity-25">
                Acceptar
            </x-button>
        </x-slot>
    </x-dialog-modal>

    <x-dialog-modal wire:model='openReject'>
        <x-slot name='title'>
            <h2 class="font-bold text-red-500"> Rechazo de aviso de interés</h2> <hr class="mt-2">
        </x-slot>
        <x-slot name='content'>
            <x-label value="Registre la razón del rechazo u observaciones realizadas" />
            <textarea rows="6" class="form-control w-full mt-2" wire:model.defer='reason'></textarea>
            <x-input-error class="mt-1" for="reason" />
        </x-slot>
        <x-slot name='footer'>
            <x-danger-button class="mx-3" wire:click="$set('openReject',false)">
                Cancelar
            </x-danger-button>
            <x-button wire:click="reject({{$notice->id}})" wire:loading.attr="disabled" class="disabled:opacity-25">
                Acceptar
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
