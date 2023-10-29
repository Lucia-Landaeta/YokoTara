<div>
    <div class="container">
        <table class="w-full border-collapse bg-white rounded-md text-left mt-3 text-sm text-gray-500">
            <thead class="bg-amber-400">
                <tr>
                    <th scope="col" class="p-4 font-medium text-gray-900">Id</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Usuario</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Pseudonimo</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Fecha creación</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Post</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Status</th>
                    <th scope="col" class="p-4 font-medium text-gray-900">Habilitado</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                @forelse ($cases as $case)
                    <tr class="hover:bg-gray-50">
                        <td class="p-4 font-normal text-gray-900">
                            {{ $case['id'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{ $case['user_id'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{ $case['pseudonym'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{ $case['date'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            {{ $case['post_id'] }}
                        </td>
                        <td class="p-4 font-normal text-gray-900">
                            @if ($case['status']['id'] == 1)
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
                            @if ($case->deleted_at == null)
                                <span
                                    class="items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>Habilitado
                                @else
                                    <span
                                        class="items-center gap-1 rounded-full bg-red-50 px-2 py-1 text-xs font-semibold text-red-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-red-600"></span>Deshabilitado
                            @endif
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

</div>
