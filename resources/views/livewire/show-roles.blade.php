<div>
    @livewire('create-rol')
    <table class="w-full border-collapse bg-white text-left mt-6 text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombre</th>
                <th scope="col" colspan="2" class="px-6 py-4 font-medium text-gray-900"></th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            @forelse ($roles as $role)
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        {{ $role['id'] }}
                    </th>
                    <td class="px-6 py-4">
                        <span
                            class="items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                            <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                            {{ $role['name'] }}
                        </span>
                    </td>
                    <td colspan="2" class="px-6 py-4">
                        <div class="flex justify-end gap-4">
                            <form action="{{ route('admin.roles.destroy', $role) }}" method="POST">
                                @csrf @method('delete')<i
                                    class="fa-solid fa-trash-can text-lg text-gray-500 cursor-pointer hover:text-red-500"></i>
                            </form>
                            {{-- @livewire('edit-rol', ['role' => $role], key($role->id)) --}}
                            <a wire:click="edit({{$role}})">
                                <i class="fa-solid fa-pencil cursor-pointer text-lg text-gray-500 ml-2 hover:text-blue-500"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No existen roles</td>
                </tr>
            @endforelse
        </tbody>
    </table>
{{-- Modal de edición de rol --}}
    <x-dialog-modal wire:model='open_edit'>
        <x-slot name='title'>
            Editar Rol
        </x-slot>
        <x-slot name='content'>
            <div class="mb-4">
                <x-label value="Nombre del Rol" />
                <x-input type="text" class="w-full mt-2" wire:model="role.name" />
                <x-input-error for="role.name" />
            </div>
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
