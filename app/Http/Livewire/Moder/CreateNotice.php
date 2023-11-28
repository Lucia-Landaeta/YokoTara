<?php

namespace App\Http\Livewire\Moder;

use App\Models\Notice;
use Livewire\Component;

class CreateNotice extends Component
{
    protected $listeners = ['cancel'];
    public $interested = false, $open = false, $description = '', $contact_number, $post;
    public function render()
    {
        $this->serchNotice();
        return view('livewire.moder.create-notice');
    }
    protected $rules = [
        'contact_number' => 'required|numeric',
    ];
    protected $messages = [
        'contact_number' => 'El teléfono de contacto es obligatorio.',
        'contact_number.numeric' => 'El teléfono debe ser un valor numérico.',
    ];
    public function save()
    {
        $this->validate();
        Notice::create([
            'description' => $this->description,
            'contact_number' => $this->contact_number,
            'user_id' => auth()->user()->id,
            'post_id' => $this->post->id,
            'notice_status_id' => 1
        ]);

        $this->reset(['open', 'description', 'contact_number']);
        $this->emit('alertSuccessP', 'El aviso se envio exitosamente');
    }
    public function cancel()
    {
        $notice = Notice::where('user_id', auth()->user()->id)
            ->where('post_id', $this->post->id)->first();
        $notice->delete();
        $this->interested = false;
    }
    public function serchNotice()
    {
        if (auth()->user()) {
            $user = auth()->user();
            if ($user->notices) {
                $notices = $user->notices->toArray();
                $notice = Notice::where('user_id', $user->id)
                    ->where('post_id', $this->post->id)->first();
                if ($notice != null) {
                    $notice = $notice->toArray();
                    if ((array_search($notice, $notices)) != 'false') {
                        $this->interested = true;
                    }
                }
            }
        }
    }

    public function redirectLogin()
    {
        return redirect()->to('/login');
    }
}
