<div>
    <button wire:click="$set('open',true)"
        class="bg-transparent hover:bg-green-500 text-green-600 font-semibold hover:text-white ml-2 py-2 px-4 border border-green-500 hover:border-transparent rounded-full cursor-pointer">Detalles</button>

    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            <h2 class="font-bold text-sky-600"> Detalles del caso</h2>
            <hr class="mt-2">
        </x-slot>
        <x-slot name='content'>
            {{-- Datos caso --}}
            <section>
                <h2 class="font-bold text-gray-500 ">Información del caso</h2>
                <p><span class="font-bold text-gray-500">Id: </span>{{ $case->id }}</p>
                <p><span class="font-bold text-gray-500">Pseusonimo: </span>{{ $case->pseudonym }}</p>
                <p><span class="font-bold text-gray-500">Fecha de creación: </span>{{ $case->date }}</p>
                <p><span class="font-bold text-gray-500">Id: </span>{{ $case->id }}</p>
            </section>
            {{-- Datos post --}}
            <section>
                <p><span class="font-bold text-gray-500">Id Usuario: </span>{{ $user->id }}</p>
                <p><span class="font-bold text-gray-500">Usuario: </span>{{ $case->id }}</p>
            </section>
            {{-- Datos usuario --}}
            <section>

            </section>
        </x-slot>
        <x-slot name='footer'>
            <x-danger-button class="mx-3" wire:click="$set('open',false)">
                Cancelar
            </x-danger-button>
            <x-button wire:loading.attr="disabled" class="disabled:opacity-25">
                Acceptar
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
