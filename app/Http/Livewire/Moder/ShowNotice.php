<?php

namespace App\Http\Livewire\Moder;

use App\Models\CaseAnimal;
use App\Models\Notice;
use App\Models\Post;
use App\Models\RecordCase;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class ShowNotice extends Component
{
    use WithPagination;
    public $open = false, $user, $name_user, $lastname_user, $email_user, $contact_number_user, $locality_user;
    public $openP = false, $post, $title_post, $description_post, $date_post, $type_post, $locality_post, $user_post;
    public $openAccept = false, $openReject = false, $reason, $notice;

    public function render()
    {
        $this->user = User::find(1);
        $notices = Notice::paginate(7);
        return view('livewire.moder.show-notice', compact('notices'));
    }
    protected $rules = [
        'reason' => 'required',
    ];
    protected $messages = [
        'reason' => 'La razón u observación es obligatoria.',
    ];
    /** Se busca el usuario correspondiente y se vincula su información con las salidas del modal*/
    public function findUser($id)
    {
        $this->user = User::find($id);
        $this->name_user = $this->user->name;
        $this->lastname_user = $this->user->lastname;
        $this->email_user = $this->user->email;
        $this->contact_number_user = $this->user->phone;
        $this->locality_user = $this->user->locality->name;
        $this->open = true;
    }
    /** Se busca el post correspondiente y se vincula su información con las salidas del modal*/
    public function findPost($id)
    {
        $this->post = Post::find($id);
        $this->title_post = $this->post->title;
        $this->type_post = $this->post->type;
        $this->description_post = $this->post->description;
        $this->date_post = $this->post->date_publish;
        $this->locality_post = $this->post->locality->name;
        $this->user_post = $this->post->user->name . ' ' . $this->post->user->lastname;
        $this->openP = true;
    }
    /** Se abre el modal de aceptacion y se recupera el aviso correspondiente */
    public function acceptModal(Notice $notice)
    {
        $this->openAccept = true;
        $this->notice = $notice;
    }
    /** Al aceptar el aviso de interes, se modifican los status del post y caso a (en control) para el inicio de los seguimientos y se registra la vinculacion del caso con el usuario interesado*/
    public function accept()
    {
        $this->validate();
        $post = Post::find($this->notice->post_id);
        $post->status_id = 2;
        $post->save();
        $caseAn = CaseAnimal::find($post->id);
        $caseAn->status_id = 2;
        $caseAn->save();

        RecordCase::create([
            'date' => Carbon::now()->format('Y-m-d'),
            'situation' => 'Interés aceptado',
            'observation' => $this->reason,
            'user_id' => $this->notice->user_id,
            'case_animal_id' => $caseAn->id
        ]);
        $this->notice->delete();
        $this->reset(['openAccept', 'reason']);
    }
    /** Se abre el modal de rechazo y se recupera el aviso correspondiente */
    public function rejectModal(Notice $notice)
    {
        $this->openReject = true;
        $this->notice = $notice;
    }
    /** Al rechazar el aviso de interes, se registra el rechazo del usuario interesado*/
    public function reject()
    {
        $this->validate();
        $post = Post::find($this->notice->post_id);
        RecordCase::create([
            'date' => Carbon::now()->format('Y-m-d'),
            'situation' => 'Interés rechazado',
            'observation' => $this->reason,
            'user_id' => $this->notice->user_id,
            'case_animal_id' => $post->caseAnimal->id
        ]);
        $this->notice->delete();
        $this->reset(['openAccept', 'reason']);
    }
}
