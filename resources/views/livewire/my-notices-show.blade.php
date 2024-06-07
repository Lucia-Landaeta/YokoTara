<div class="pb-6">
    <div class=" py-4 mb-6 shadow">
        <div class="container flex">
            <button class="btn-transparent p-2" wire:click='resetFilters'>
                <i class="fa-regular fa-rectangle-list mr-1"></i>
                Todos los intereses
            </button>
            {{-- Botón-Dropdown/alpine --}}
            <div class="relative" x-data="{ open: false }">
                <button class="btn-transparent p-2" x-on:click="open=!open">
                    <i class="fa-solid fa-check-to-slot"></i>
                    Status
                    <i class="fa-solid fa-caret-down text-sky-700 ml-2 invisible sm:visible"></i>
                </button>
                {{-- Dropdown body --}}
                <div class="absolute right-0 w-40 mt-1 py-2 bg-white bg-opacity-60 rounded shadow-xl" x-show="open"
                    x-on:click.away="open=false">
                    <a class="btn-dropdown" wire:click="$set('status','1')" x-on:click="open=false">Pendiente</a>
                    <div class="py-2">
                        <hr>
                    </div>
                    <a class="btn-dropdown" wire:click="$set('status','2')" x-on:click="open=false">Aceptado</a>
                    <div class="py-2">
                        <hr>
                    </div>
                    <a class="btn-dropdown" wire:click="$set('status','3')" x-on:click="open=false">Rechazado</a>
                </div>
            </div>
            {{-- Tags --}}
            <div class="ml-9 pt-2 border-l-2 pl-9">
                @if ($status == '1')
                    <span
                        class="items-center gap-1 rounded-full bg-gray-200 px-3 py-2 text-xs font-semibold text-gray-600">Pendiente
                        <i class="fa-regular fa-circle-xmark text-base cursor-pointer ml-1 pt-1"
                            wire:click="$set('status','')"></i></span>
                @endif
                @if ($status == '2')
                    <span
                        class="items-center gap-1 rounded-full bg-gray-200 px-3 py-2 text-xs font-semibold text-gray-600">Aceptado
                        <i class="fa-regular fa-circle-xmark text-base cursor-pointer ml-1 pt-1"
                            wire:click="$set('status','')"></i></span>
                @endif
                @if ($status == '3')
                    <span
                        class="items-center gap-1 rounded-full bg-gray-200 px-3 py-2 text-xs font-semibold text-gray-600">Rechazado
                        <i class="fa-regular fa-circle-xmark text-base cursor-pointer ml-1 pt-1"
                            wire:click="$set('status','')"></i></span>
                @endif
            </div>
        </div>
    </div>


    <div class="container">
        <table class="w-full border-collapse bg-white rounded-md text-left mt-3 text-sm text-gray-500">
            <thead class="bg-amber-400">
                <tr>
                    <th scope="col" class="p-4 font-medium text-gray-900 pl-8">Descripción</th>
                    <th scope="col" class="p-4 font-medium text-center text-gray-900">Publicación</th>
                    <th scope="col" class="p-4 font-medium text-center text-gray-900">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @forelse ($notices as $notice)
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 font-normal text-gray-900 pl-8">
                            {{ $notice->description }}
                        </td>
                        <td class="p-4 text-center font-normal text-gray-900">
                            {{ $notice->post_id }}
                        </td>
                        <td class="p-4 font-normal text-center text-gray-900">
                            @if ($notice->notice_status_id == 1)
                                <span
                                    class="items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                @elseif ($notice->notice_status_id == 2)
                                    <span
                                        class="items-center gap-1 rounded-full bg-orange-50 px-2 py-1 text-xs font-semibold text-orange-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-orange-600"></span>
                                    @else
                                        <span
                                            class="items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                            <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>
                            @endif
                            {{ $notice->notice_status->name }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-gray-400 p-3" colspan="4"><i class="fa-solid fa-frog mx-3 "></i>No
                            has indicado interes en ninguna publicación.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        <div class="container pb-4">
            {{ $notices->links() }}
        </div>
    </div>
    
    <div class="container text-center">
        <p class="text-gray-500 text-base indent-3">Las razones de la decisión tomada por los moderadores es debidamente informada en el email que proporcionó al registrarse.</p>
        <p class="text-gray-500 text-base">Ante cualquier duda puede <a href="{{route('contact.index')}}" class="text-blue-500 hover:underline">contactarse con nosotros</a>.</p>
    </div>
</div>
