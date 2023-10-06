<?php

namespace App\Http\Livewire\Role;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ShowRoles extends Component
{
    public $role, $open_edit = false, $permissions = [];
    protected $listeners =['render','delete'];

    public function render()
    {
        $roles = Role::orderBy('id','desc')->get();
        $permissions_db = Permission::all();
        return view('livewire.role.show-roles', compact('roles','permissions_db'));
    }
    protected $rules = [
        'permissions' => 'required',
        'role.name' => 'required|max:15',
    ];

    public function edit(Role $role){
        $this->role = $role;
        $this->open_edit = true;
        $this->permissions = $this->find($role);
    }

    public function update (){
        $this->validate();
        $this->role->syncPermissions($this->permissions);
        $this->role->save();
        $this->reset(['open_edit']);
        $this->emit('alertSuccessP', 'Rol modificado exitosamente');
    }

    public function delete(Role $role){
        $role->delete();
    }
    public function find(Role $role){
        $permId = [];
        $i =0;
        foreach ($role->permissions as $item) {
            $permId[$i]= $item->id;
            ++$i;
        }
        return $permId;
    }
}
