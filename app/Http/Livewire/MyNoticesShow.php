<?php

namespace App\Http\Livewire;

use App\Models\Notice;
use Livewire\Component;
use Livewire\WithPagination;

class MyNoticesShow extends Component
{
    use WithPagination;
    public $status;

    public function render()
    {
        $notices = Notice::where('user_id',auth()->user()->id)
        ->status($this->status)
        ->withTrashed()
        ->orderBy('id','desc')->paginate(10);;
        return view('livewire.my-notices-show',compact('notices'));
    }

    public function resetFilters(){
        $this->reset(['status']);
    }
}
