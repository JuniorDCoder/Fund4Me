<?php

namespace App\Livewire;

use App\Models\Blog;
use Livewire\Component;

class BlogSection extends Component
{
    public $blogs;

    public function mount()
    {
        $this->blogs = Blog::latest()->take(3)->get();
    }
    public function render()
    {
        return view('livewire.blog-section');
    }
}
