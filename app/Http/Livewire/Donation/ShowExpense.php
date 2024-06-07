<?php

namespace App\Http\Livewire\Donation;

use App\Models\Expense;
use App\Models\Image;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ShowExpense extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $open = false, $openFiles = false, $description, $date, $amount, $files = [], $identifier, $showFiles;

    public function mount()
    {
        $this->identifier = rand();
    }

    protected $rules = [
        'description' => 'required',
        'date' => 'required|date|before:today',
        'amount' => 'required|numeric',
        'files' => 'required|max:4',
    ];
    protected $messages = [
        'description' => 'La descripción del gasto es obligatoria.',
        'date' => 'La fecha es obligatoria.',
        'date.before' => 'La fecha no puede ser posterior a la actual.',
        'amount' => 'El monto es obligatorio.',
        'amount.numeric' => 'El monto debe ser un valor valido. (* decimales escritos con punto)',
        'files' => 'Los comprobantes son obligatorios.',
        'files.max' => 'Se pueden cargar 4 archivos como maximo. Por favor vuelva a seleccionarlos.',
    ];

    public function render()
    {
        $expenses = Expense::orderBy('id', 'desc')->paginate(7);
        return view('livewire.donation.show-expense', compact('expenses'));
    }

    public function save()
    {
        $this->validate();
            $expense = Expense::create([
                'description' => $this->description,
                'date' => Carbon::parse($this->date)->format('Y-m-d'),
                'amount' => $this->amount,
            ]);
            if ($this->files) {
                foreach ($this->files as $file) {
                    Image::create([
                        'url' => $file->store('expenses', 'public'),
                        'imageable_id' => $expense->id,
                        'imageable_type' => 'App\Models\Expense'
                    ]);
                }
            }
            $this->reset(['open', 'description', 'amount', 'date']);
            $this->identifier = rand();
            $this->emit('alertSuccessP', 'El registro de gasto se creo exitosamente');
    }

    // Se recuperar los archivos vinculados al pago
    public function showFiles(Expense $expense)
    {
        $this->showFiles = $expense->images;
        $this->openFiles = true;
    }
}
