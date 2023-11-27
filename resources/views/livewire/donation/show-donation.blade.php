<div>
    <button wire:click="$set('open',true)"
        class="bg-transparent hover:bg-green-500 text-green-600 font-semibold hover:text-white ml-2 py-2 px-4 border border-green-500 hover:border-transparent rounded-full cursor-pointer">Cargar
        donación</button>
    <table class="w-full border-collapse bg-white text-left mt-6 text-sm text-gray-500">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">N° operación</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Fecha</th>
                <th scope="col" class="px-6 py-4 font-medium text-gray-900">Monto</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
            @forelse ($donations as $donation)
                <tr class="hover:bg-gray-50">
                    <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                        {{ $donation['id'] }}
                    </th>
                    <td class="px-6 py-4">
                        <span
                            class="items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                            <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                            {{ $donation['transaction_id'] }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        {{ $donation['date'] }}
                        </span>
                    </td>
                    <td class="px-6 py-4">
                        {{ $donation['amount'] }}
                        </span>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No existen donaciones registrsdas</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    @if (count($donations) > 7)
        <div class="container bg-white py-4 mt-1">
            {{ $donations->links() }}
        </div>
    @endif

    <x-dialog-modal wire:model='open'>
        <x-slot name='title'>
            Nuevo registro de donación
        </x-slot>
        <x-slot name='content'>
            <div class="mb-4">
                <x-label value="Número de operación" />
                <x-input type="text" class="w-full mt-2" wire:model.defer='transaction_id' />
                <x-input-error for="transaction_id" />
            </div>
            @if ($error == true)
                <p class="text-red-500">Mercado pago: {{ $message }}</p>
            @endif
        </x-slot>
        <x-slot name='footer'>
            <x-danger-button class="mx-3" wire:click="$set('open',false)">
                Cancelar
            </x-danger-button>
            <x-button wire:click='recover' wire:loading.attr="disabled" class="disabled:opacity-25">
                Crear Rol
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
