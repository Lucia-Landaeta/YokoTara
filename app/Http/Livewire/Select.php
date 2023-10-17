<?php

namespace App\Http\Livewire;

use App\Models\Locality;
use App\Models\Province;
use Livewire\Component;

class Select extends Component
{
    public $locality;
    public $province;
    public $provinces = [], $localities = [];

    public function mount(){
        $this->provinces = Province::all();
        $this->localities = collect();
    }
    // fun. que carga el listado de las ciudades cada vez que la prop. province se modifica
    public function updatedProvince($value){
        $this->localities = Locality::where('province_id',$value)->get();
        $this->locality = $this->localities->first()->id ?? null;
    }
    public function render()
    {
        return view('livewire.select');
    }

    public function updatedLocality()
{
	$this->emitUp('totalUpdated', $this->locality);
}
}
