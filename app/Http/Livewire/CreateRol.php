<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class CreateRol extends Component
{
    public $open = false;
    public $name;

    protected $rules = [
        'name' => 'required|max:15',
    ];

    // /**Cada vez que se modifique una propiedad se va a verificar que se cumplan las validaciones */
    // public function updated($propertyName)
    // {
    //     $this->validateOnly($propertyName);
    // }

    public function save()
    {
        $this->validate();
        Role::create([
            'name' => $this->name,
        ]);

        $this->reset(['open', 'name']);
        $this->emitTo('show-roles', 'render'); //se emite el evento render para que al crear un registro en la bd el componente se renderice y mostrando el nuevo registro
        $this->emit('alertSuccessP', 'El Rol se creo exitosamente');
    }

    public function render()
    {
        return view('livewire.create-rol');
    }
}
