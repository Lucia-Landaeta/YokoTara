<?php

namespace App\Http\Livewire\Moder;

use Livewire\Component;

class ModalCase extends Component
{
    public $open = false, $case, $post, $user;
    public function render()
    {
        $this->post = $this->case->post;
        $this->user = $this->post->user;
        return view('livewire.moder.modal-case');
    }
}
