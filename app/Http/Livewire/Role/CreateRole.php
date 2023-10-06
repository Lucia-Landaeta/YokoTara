<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class CreateRole extends Component
{
    public $open = false;
    public $name;

    protected $rules = [
        'name' => 'required|unique:roles|max:15',
    ];
    public function save()
    {
        $this->validate();
        Role::create([
            'name' => $this->name,
        ]);

        $this->reset(['open', 'name']);
        $this->emitTo('role.show-roles', 'render'); //se emite el evento render para que al crear un registro en la bd el componente se renderice y mostrando el nuevo registro
        $this->emit('alertSuccessP', 'El Rol se creo exitosamente');
    }
    public function render()
    {
        return view('livewire.role.create-role');
    }
}
