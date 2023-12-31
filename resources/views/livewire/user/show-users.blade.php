<div>
    {{-- Search --}}
    <div class="px-2 pt-1 pb-4">
        <div wire:model='search' action="" class="relative ">
            <input type="search" placeholder="Buscar usuario por nombre o apellido"
                class="peer cursor-pointer relative z-10 h-12 w-full rounded-full border bg-transparent pl-16 outline-none focus:cursor-text focus:border-cyan-100 focus:pl-16 focus:pr-4" />
            <svg xmlns="http://www.w3.org/2000/svg"
                class="absolute inset-y-0 my-auto  h-8 w-12 border-r border-transparent stroke-gray-500 px-3.5 peer-focus:border-orange-300 border-gray-500 peer-focus:stroke-orange-500"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
        </div>
    </div>
    {{-- Table --}}
    @if ($users->count())
        <table class="w-full border-collapse bg-white text-left mt-6 text-sm text-gray-500">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="p-4 font-medium text-gray-900">Id</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Nombre</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Apellido</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Email</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Teléfono</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Habilitado</th>
                    <th scope="col" class="pt-4 pb-4 font-medium text-gray-900"><span>Asignar Rol</span> <span
                            class="ml-6">Habilitar</span> </th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @forelse ($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 font-normal text-gray-900">
                            {{ $user['id'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{ $user['name'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{ $user['lastname'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{ $user['email'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{ $user['phone'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            @if ($user->deleted_at == null)
                                <span
                                    class="items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>Habilitado
                                @else
                                    <span
                                        class="items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>Deshabilitado
                            @endif
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            <div class="flex justify-center">
                                {{-- Edit rol --}}
                                @if ($user->deleted_at == null)
                                    <a wire:click="edit({{ $user }})"> <i
                                            class="fa-solid fa-users-gear cursor-pointer text-lg text-gray-500 mr-5 pr-5 hover:text-blue-500"></i>
                                    </a>
                                @else
                                    <i class="fa-solid fa-users-gear text-lg text-white mr-5 pr-5"></i>
                                @endif
                                {{-- Disable --}}
                                @if ($user->id != 1)
                                    <a> <i wire:click="$emit('deleteUser', {{ $user->id }})"
                                            class="fa-solid fa-user-lock cursor-pointer text-lg text-gray-500 ml-3 pr-6 hover:text-blue-500"></i>
                                    </a>
                                @else
                                    <i class="fa-solid fa-user-lock text-lg text-white ml-5 pr-6"></i>
                                @endif

                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No existen usuarios registrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="container bg-white py-4 mt-1">
            {{ $users->links() }}
        </div>
    @else
        <div class="px-10 py-4">
            <p class="text-gray-400"><i class="fa-solid fa-frog"></i>&#160 No se encontraron coincidencias</p>
        </div>
    @endif
    {{-- Modal de asignación de rol --}}
    <x-dialog-modal wire:model='open_edit'>
        <x-slot name='title'>
            Asignar roles
        </x-slot>
        <x-slot name='content'>
            <div class="mb-4">
                <x-label value="Usuario" />
                <x-input type="text" class="w-auto mt-2 border-white" wire:model="user.name" disabled />
                <x-input-error for="user.name" />
            </div>
            <div>
                <p class="mb-2">Permisos</p>
                @foreach ($roles_db as $role)
                    <x-label>
                        <input class="rounded-full" type="checkbox" value="{{ $role->name }}" wire:model="roles"
                            {{ in_array($role->name, $roles) ? 'checked' : '' }} />&#160
                        {{ $role->name }}
                    </x-label>
                @endforeach
                <x-input-error for="roles" />
            </div>
            Roles: {{ var_export($roles) }}
        </x-slot>
        <x-slot name='footer'>
            <x-danger-button class="mx-3" wire:click="$set('open_edit',false)">
                Cancelar
            </x-danger-button>
            <x-button wire:click='update' wire:loading.attr="disabled" class="disabled:opacity-25">
                Editar Rol
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
