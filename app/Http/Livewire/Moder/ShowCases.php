<?php

namespace App\Http\Livewire\Moder;

use App\Models\CaseAnimal;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCases extends Component
{
    use WithPagination;
    protected $listeners =['disable','assign'];
    public $open =false, $user, $name_user ='', $lastname_user, $email_user, $locality_user, $phone_user;
    public $openP =false, $post, $title_post, $type_post, $description_post, $date_post, $locality_post, $user_post;
    public function render()
    {
        $cases = CaseAnimal::where('status_id','1')->orWhere('status_id','2')->orderBy('status_id','desc')->orderBy('id','desc')->paginate(7);
        return view('livewire.moder.show-cases',compact('cases'));
    }

    public function findUser($id){
        $this->user = User::find($id);
        $this->name_user = $this->user->name." ".$this->user->lastname;
        $this->email_user = $this->user->email;
        $this->phone_user = $this->user->phone;
        $this->locality_user = $this->user->locality->name;
        $this->open = true;
    }
    public function findPost($id)
    {
        $this->post = Post::find($id);
        $this->title_post = $this->post->title;
        $this->type_post = $this->post->type;
        $this->description_post = $this->post->description;
        $this->date_post = Carbon::parse($this->post->date_publish)->format('d/m/Y');
        $this->locality_post = $this->post->locality->name;
        $this->user_post = $this->post->user->name . ' ' . $this->post->user->lastname;
        $this->openP = true;
    }

    public function disable($caseId){
        $case = CaseAnimal::find($caseId);
        if ($case->deleted_at == null) {
            $case->delete();
        } else {
            $case->deleted_at = null;
            $case->save();
        }        
    }

    public function assign($caseId){
        $case = CaseAnimal::find($caseId);
        $case->user_id = auth()->user()->id;
        $case->save();
    }
}
