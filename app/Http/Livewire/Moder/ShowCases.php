<?php

namespace App\Http\Livewire\Moder;

use App\Models\CaseAnimal;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCases extends Component
{
    use WithPagination;
    public function render()
    {
        // Filtro por titulo o contenido
        $cases = CaseAnimal::orderBy('id','desc')->paginate(17);;
        return view('livewire.moder.show-cases',compact('cases'));
    }
}
