<?php

namespace App\Http\Livewire\Moder;

use App\Models\Image;
use App\Models\RecordCase;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class ShowRecords extends Component
{
    use WithFileUploads;

    public $case, $open = false, $situation, $user, $observation, $identifier, $images = [];

    public function mount()
    {
        $this->identifier = rand();
    }

    public function render()
    {
        $situations = ['En adopción', 'Perdido', 'Encontrado', 'Transito', 'Recuperado', 'Adoptado', 'Control', 'Interés aceptado', 'Interés rechazado'];
        $records = RecordCase::where('case_animal_id', $this->case->id)->get();
        $users = User::orderBy('name', 'asc')->get();
        return view('livewire.moder.show-records', compact('records', 'situations', 'users'));
    }

    protected $rules = [
        'situation' => 'required',
        'observation' => 'required',
        'user' => 'required',
        'images.*' => 'image',
        'images' => 'max:4',
    ];
    protected $messages = [
        'situation' => 'La situación de registro es obligatoria.',
        'observation' => 'La observación es obligatoria.',
        'user' => 'El usuario es obligatorio.',
        'images.max' => 'Se pueden cargar 4 imagen como maximo',
        'images.*.image' => 'Solo se permiten imagenes'
    ];
    public function updatedImages()
    {
        $this->validate([
            'images.*' => 'image',
            'images' => 'max:4',
        ]);
    }
    public function save()
    {
        $this->validate();
        $record = RecordCase::create([
            'date' => Carbon::now()->format('Y-m-d'),
            'situation' => $this->situation,
            'observation' => $this->observation,
            'user_id' => $this->user,
            'case_animal_id' => $this->case->id
        ]);
        if ($this->images) {
            foreach ($this->images as $image) {
                // dd($image);
                Image::create([
                    'url' => $image->store('records', 'public'),
                    'imageable_id' => $record->id,
                    'imageable_type' => 'App\Models\recordCase'
                ]);
            }
        }
        $this->reset(['open', 'situation', 'observation', 'user']);
        $this->identifier = rand();
        $this->emit('alertSuccessP', 'El registro se creo exitosamente');
    }
}
