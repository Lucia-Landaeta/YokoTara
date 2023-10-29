<div>
    <div class="text-right mt-2">
        @auth
            @if ($interested)
                <button wire:click="$emit('cancelNotice')"
                    class="bg-transparent hover:bg-cyan-500 text-cyan-600 font-semibold hover:text-white py-2 px-4 border border-cyan-500 hover:border-transparent rounded-lg">
                    <i class="fa-regular fa-heart text-lg mr-2"></i>Ya no me interesa
                </button>
            @else
                <button wire:click="$set('open',true)"
                    class="bg-transparent hover:bg-pink-500 text-pink-600 font-semibold hover:text-white py-2 px-4 border border-pink-500 hover:border-transparent rounded-lg">
                    <i class="fa-regular fa-heart text-lg mr-2"></i>Me interesa
                </button>
            @endif
        @else
        <button class="bg-transparent text-pink-600 font-semibold hover:bg-pink-500 hover:border-transparent hover:text-white  py-2 px-4 border border-pink-500  rounded-lg">
                    <i class="fa-regular fa-heart text-lg mr-2"></i>Logueate
                </button>
        @endauth


    </div>
    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Enviar aviso de interes
        </x-slot>
        <x-slot name='content'>
            <div class="mb-4">
                <x-label value="Descripción del aviso" />
                <textarea rows="6" class="form-control w-full mt-2" wire:model.defer='description'></textarea>
                <x-input-error class="mt-1" for="description" />
            </div>
            <div class="mb-4">
                <x-label value="Número de contacto" />
                <x-input id="contact_number" class="block mt-1 w-full" type="number" name="contact_number"
                    wire:model.defer='contact_number' />
                <x-input-error class="mt-1" for="contact_number" />
            </div>
        </x-slot>
        <x-slot name='footer'>
            <x-danger-button class="mx-3" wire:click="$set('open',false)">
                Cancelar
            </x-danger-button>
            <x-button wire:click='save' wire:loading.attr="disabled" class="disabled:opacity-25">
                Enviar aviso
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
