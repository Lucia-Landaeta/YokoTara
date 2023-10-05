<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class ShowRoles extends Component
{
    protected $listeners =['render' => 'render'];

    public function render()
    {
        $roles = Role::orderBy('id','desc')->get();
        return view('livewire.show-roles', compact('roles'));
    }
}
