<?php

namespace App\Http\Livewire\Post;
use Livewire\WithPagination;

use Livewire\Component;
use App\Models\User;
use App\Models\Post;

class Index extends Component
{
      use WithPagination;

public $title="true";
public $new=true;
public $all_posts;//
    public function render()
    {
        return view('livewire.post.index', [
            'posts' => Post::paginate(1),
            'title' => 'All Posts'
        ])  ;
    }

    public function mount()
    {
    $this->all_posts=Post::all();  //
    }
}
