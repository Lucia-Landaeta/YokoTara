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
    public $pet;

    public function render()
    {
        $posts = Post::where('posts.status_id', 1)
            ->type($this->type)
            ->pet($this->pet)
            ->time($this->time)
            ->paginate(8);;
        return view('livewire.posts-filters', compact('posts'));
    }

    public function resetFilters()
    {
        $this->reset(['type', 'time','pet']);
    }
}
