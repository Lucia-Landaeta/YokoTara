<div>
    <button wire:click="$set('open',true)"
        class="bg-transparent hover:bg-green-500 text-green-600 font-semibold hover:text-white ml-2 py-2 px-4 border border-green-500 hover:border-transparent rounded-full cursor-pointer">Crear
        rol</button>

    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Crear nuevo Rol
        </x-slot>
        <x-slot name='content'>
            <div class="mb-4">
                <x-label value="Nombre del Rol" />
                <x-input type="text" class="w-full mt-2" wire:model.defer='name' />
                <x-input-error for="name" />
            </div>
            <div>
                <p class="mb-2">Permisos</p>
                @foreach ($permissions_db as $permission)
                    <x-label>
                    <input type="checkbox" value="{{ $permission->id }}" wire:model="permissions" />
                    {{ $permission->name }}
                </x-label>
                @endforeach
                <x-input-error for="permissions" />
            </div>
            Permissions: {{ var_export($permissions) }}
        </x-slot>
        <x-slot name='footer'>
            <x-danger-button class="mx-3" wire:click="$set('open',false)">
                Cancelar
            </x-danger-button>
            <x-button wire:click='save' wire:loading.attr="disabled" class="disabled:opacity-25">
                Crear Rol
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
