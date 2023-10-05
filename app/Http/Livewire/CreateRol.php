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

    /**Cada vez que se modifique una propiedad se va a verificar que se cumplan las validaciones */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();
        Role::create([
            'name' => $this->name,
        ]);

        $this->reset(['open', 'name']);
        $this->emitTo('show-roles', 'render'); //se estaemitiendo el evento render para que al crear un nuevo registro en la bd el componente se renderice y muestro el nuevo registro
        // $this->emit('alert', 'El post se creo exitosamente');
    }

    public function render()
    {
        return view('livewire.create-rol');
    }
}
