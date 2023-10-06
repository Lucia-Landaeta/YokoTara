<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class ShowRoles extends Component
{
    public $role, $open_edit = false;
    protected $listeners =['render','delete'];

    public function render()
    {
        $roles = Role::orderBy('id','desc')->get();
        return view('livewire.role.show-roles', compact('roles'));
    }
    protected $rules = [
        'role.name' => 'required|unique:roles,name|max:15',
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

    public function delete(Role $role){
        $role->delete();
    }
}
