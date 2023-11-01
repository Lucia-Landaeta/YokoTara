<?php

namespace App\Http\Livewire\Moder;

use App\Models\Animal;
use App\Models\CaseAnimal;
use App\Models\Image;
use Livewire\Component;
use App\Models\Post;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $open = false;
    public $title, $content, $image, $locality, $identifier, $type, $type_animal, $gender, $stage, $previous_case = false, $case = null,$pseudonym;

    protected $listeners = ['totalUpdated' => 'doSomething'];
    public function mount()
    {
        $identifier = rand();
    }

    protected $rules = [
        'title' => 'required|max:20',
        'content' => 'required',
        'locality' => 'required',
        'image' => 'required|image|max:2048',
        'type' => 'required',
        'type_animal' => 'required',
        'gender' => 'required',
        'stage' => 'required',
        'pseudonym' => 'required'
    ];
    protected $messages = [
        'locality' => 'El campo localidad es obligatorio.',
        'type_animal' => 'El campo tipo de animal es obligatorio.',
        'type' => 'El campo tipo de publicación es obligatorio.',
        'stage' => 'El campo edad es obligatorio.',
    ];
    public function save()
    {
        try {
            $this->validate();
            $newPost = Post::create([
                'title' => $this->title,
                'description' => $this->content,
                'date_publish' => Carbon::now()->format('Y-m-d'),
                'type' => $this->type,
                'locality_id' => $this->locality,
                'status_id' => 1,
                'user_id' => auth()->id(),
            ]);
            Image::create([
                'url' => $this->image->store('posts', 'public'),
                'imageable_id' => $newPost->id,
                'imageable_type' => 'App\Models\Post'
            ]);
            $new_case = CaseAnimal::create([
                'date' => Carbon::now()->format('Y-m-d'),
                'status_id' => 1,
                'post_id' => $newPost->id,
                'pseudonym'=> $this->pseudonym
            ]);
            if ($this->previous_case) {
                $new_case->case_animal_id = (int)$this->case;
                $new_case->save();
            }
            Animal::create([
                'type_animal' => $this->type_animal,
                'description' => 'description',
                'gender' => $this->gender,
                'stage' => $this->stage,
                'case_animal_id' => $new_case->id,
            ]);

            $this->reset(['open', 'title', 'content', 'image','type_animal', 'gender', 'stage', 'type', 'locality', 'pseudonym', 'previous_case', 'case']);
            $this->identifier = rand();
            $this->emitTo('posts-filters', 'render'); //se estaemitiendo el evento render para que al crear un nuevo registro en la bd el componente se renderice y muestro el nuevo registro
            $this->emit('alertSuccessP', 'La publicación se creo exitosamente');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function render()
    {
        $cases_db = CaseAnimal::all();
        return view('livewire.moder.create-post', compact('cases_db'));
    }


    public function doSomething($total)
    {
        $this->locality = $total;
    }
}
