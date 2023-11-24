<?php

namespace App\Http\Livewire\Moder;

use App\Models\CaseAnimal;
use App\Models\Post;
use App\Models\RecordCase;
use App\Models\User;
use Carbon\Carbon;
use Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ShowCases extends Component
{
    use WithPagination;
    protected $listeners =['finish','assign'];
    public $search, $status, $aUser, $myCases;
    public $open =false, $user, $name_user ='', $lastname_user, $email_user, $locality_user, $phone_user;
    public $openP =false, $post, $title_post, $type_post, $description_post, $date_post, $locality_post, $user_post;
    public $openU = false, $users, $interested_user, $reason, $case, $show = false;
    public $myCasesTag = false;

    protected $rules = [
        'reason' => 'required',
        'interested_user' => 'required',
    ];
    protected $messages = [
        'reason' => 'La razón u observación es obligatoria.',
        'interested_user' => 'El usuario es obligatorio',
    ];

    public function render()
    {
        if ($this->search) {
            $cases = CaseAnimal::where('pseudonym', 'like', '%' . $this->search . '%')->paginate(7);
        } else {
            $cases = CaseAnimal::mycase($this->myCases)->status($this->status)->orderBy('status_id','asc')->orderBy('id','desc')->withTrashed()->paginate(7);
        }
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

    public function finish($caseId){
        $case = CaseAnimal::find($caseId);
        $case->status_id = 3;
        $case->save();
        $case->delete();
        $post = Post::find($case->post_id);
        $post->status_id = 3;
        $post->save();
        $post->notices()->delete();
        $post->delete();
    }
    public function assign($caseId){
        $case = CaseAnimal::find($caseId);
        $case->user_id = auth()->user()->id;
        $case->save();
        
    }
    public function modalAssignUSer(CaseAnimal $case){
        $this->case = $case;
        $this->users = User::orderBy('name','asc')->get();
        $this->openU = true;
    }
    public function assignUser(){
        $this->validate();
        $this->case->status_id = 2;
        $this->case->save();

        $post = $this->case->post;
        $post->status_id = 2;
        $post->save();

        RecordCase::create([
            'date' => Carbon::now()->format('Y-m-d'),
            'situation' => 'Interés aceptado',
            'observation' => $this->reason,
            'user_id' => $this->interested_user,
            'case_animal_id' => $this->case->id
        ]);
        $this->reset(['openU', 'reason', 'interested_user', 'case']);
    }
    public function updatingSearch(){
        $this->resetPage();
    }
    public function resetFilters()
    {
        $this->reset(['myCases','status','myCasesTag']);
    }
    public function redirectRecords($caseId){
        return redirect()->route('records.index',$caseId);
    }

    public function myCasesSetTrue(){
        $this->myCases = auth()->user()->id;
        $this->myCasesTag = true;
    }

    public function myCasesSetFalse(){
        $this->myCasesTag = false;
        $this->reset(['myCases']);
    }
    
}
