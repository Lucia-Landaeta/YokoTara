<div>
<div class="grid grid-cols-2">
    <div class="mt-4 mr-2">
        <x-label value="Provincia" />
        <select wire:model="province" :value="old('province')"
            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            <option value="">Elija provincia</option>
            @foreach ($provinces as $province)
                <option value="{{ $province->id }}">{{ $province->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mt-4 ml-1">
        <x-label for="locality_id" value="Ciudad" />
        <select wire:model="locality" name="locality_id" id="locality_id" 
            class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            @if ($localities->count() == 0)
                <option value="">Elija provincia antes</option>
            @else
            <option value="">Seleccione una localidad</option>
                @foreach ($localities as $locality)
                    <option value="{{ $locality->id }}">{{ $locality->name }}</option>
                @endforeach
            @endif

        </select>
    </div>
</div>
</div>
