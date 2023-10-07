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
    protected $listeners =['disable'];
    public function render()
    {
        // Filtro por titulo o contenido
        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('lastname', 'like', '%' . $this->search . '%')
            ->withTrashed()
            ->paginate(7);
        $roles_db = Role::select('name')->get();
        return view('livewire.user.show-users',compact('users','roles_db'));
    }

    protected $rules = [
        'roles' => 'required',
        'user.name' => 'required'
    ];

    public function updatingSearch(){
        $this->resetPage();
    }

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

    public function disable($userId){
        
        $user = User::withTrashed()->find($userId);
        if ($user->deleted_at == null) {
            $user->delete();
        } else {
            $user->deleted_at = null;
            $user->save();
        }        
    }
}
