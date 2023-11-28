<div>
    <div class="container pb-12">
        <table class="w-full border-collapse bg-white text-left mt-6 text-sm text-gray-500">
            <thead class="bg-sky-500">
                <tr>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Id</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Descripción</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Fecha</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Monto</th>
                    <th scope="col" class="px-6 py-4 font-medium text-gray-900">Comprobante</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @forelse ($expenses as $expense)
                    <tr class="hover:bg-gray-50">
                        <th class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                            {{ $expense['id'] }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $expense['description'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $expense['date'] }}
                        </td>
                        <td class="px-6 py-4">
                            ${{ $expense['amount'] }}
                        </td>
                        <td class="px-6 py-4">
                            <span class="cursor-pointer font-bold text-green-500 hover:text-green-300"
                                wire:click="showFiles({{ $expense->id }})">Archivos</span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No existen gastos registrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    
        @if (count($expenses) > 7)
            <div class="container bg-white py-4 mt-1">
                {{ $expenses->links() }}
            </div>
        @endif
    </div>

    <x-dialog-modal wire:model='openFiles'>
        <x-slot name='title'>
            Comprobantes
        </x-slot>
        <x-slot name='content'>
            @if (count($expenses) != 0)
                @if ($showFiles)
                    <div class="columns-1 ">
                        @foreach ($showFiles as $file)
                            @if (mime_content_type('file:///L:/xampp/htdocs/YokoTara/public/storage/' . $file->url) != 'application/pdf')
                                <div class="w-full"><img class="w-3/6 my-3 mx-auto"
                                        src="{{ $expense->images ? Storage::url($file->url) : 'https://imagen_prueba.com' }}"
                                        alt=""></div>
                            @else
                                <iframe class="w-3/6 my-3 mx-auto" width="400" height="400" src='{{ Storage::url($file->url) }}'
                                    frameborder="0"></iframe>
                            @endif
                            <hr>
                        @endforeach
                    </div>
                @endif
            @endif

        </x-slot>
        <x-slot name='footer'>
        </x-slot>
    </x-dialog-modal>
</div>
