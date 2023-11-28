<?php

namespace App\Http\Livewire\Donation;

use App\Models\Expense;
use Livewire\Component;
use Livewire\WithPagination;

class ShowExpensesPublic extends Component
{
    use WithPagination;

    public $openFiles = false, $showFiles;

    public function render()
    {
        $expenses = Expense::orderBy('id','desc')->paginate(7);
        return view('livewire.donation.show-expenses-public',compact('expenses'));
    }

    public function showFiles(Expense $expense){
        $this->showFiles = $expense->images;
        $this->openFiles = true;
    }
}
