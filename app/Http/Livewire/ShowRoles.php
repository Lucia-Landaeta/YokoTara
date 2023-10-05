<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class ShowRoles extends Component
{
    public $role, $open_edit = false;
    protected $listeners =['render' => 'render'];

    public function render()
    {
        $roles = Role::orderBy('id','desc')->get();
        return view('livewire.show-roles', compact('roles'));
    }

    protected $rules = [
        'role.name' => 'required|max:15',
    ];

    public function edit(Role $role){
        $this->role = $role;
        $this->open_edit = true;
    }

    public function update (){
        $this->validate();
        $this->role->save();
        $this->reset(['open_edit']);
        $this->emit('alertSuccessP', 'Rol modificado exitosamente');
    }
}
