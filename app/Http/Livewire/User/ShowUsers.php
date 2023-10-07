<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class ShowUsers extends Component
{
    use WithPagination;

    public $search, $user, $open_edit = false, $roles = [];

    public function render()
    {
        // Filtro por titulo o contenido
        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('lastname', 'like', '%' . $this->search . '%')
            ->orderBy('id','desc')
            ->get();
        $roles_db = Role::select('name')->get();
        // $users = User::orderBy('id','desc')->paginate(8);
        return view('livewire.user.show-users',compact('users','roles_db'));
    }

    protected $rules = [
        'roles' => 'required',
        'user.name' => 'required'
    ];

    public function edit(User $user){
        $this->user = $user;
        $this->open_edit = true;
        $this->roles = $user->getRoleNames()->toArray();
    }
    public function update (){
        $this->validate();
        $this->user->syncRoles($this->roles);
        $this->reset(['open_edit']);
        $this->emit('alertSuccessP', 'Roles asignados exitosamente');
    }
}
