<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostsFilters extends Component
{
    use WithPagination;
    public $type;
    public $time;

    public function render()
    {
        $posts = Post::where('status_id', 1)
            ->type($this->type)
            ->time($this->time)
            ->paginate(8);;
        return view('livewire.posts-filters', compact('posts'));
    }

    public function resetFilters()
    {
        $this->reset(['type', 'time']);
    }
}
