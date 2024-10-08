<?php

namespace App\Livewire\Forms;

use App\Models\Category;
use App\Models\Fund;
use Illuminate\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class FundraiserForm extends Component
{
    use WithFileUploads;

    #[Rule('required|string|max:255')]
    public $title;
    #[Rule('required|string')]
    public $description;
    #[Rule('required|string')]
    public $story;
    #[Rule('required|string')]
    public $currency = 'XAF';
    #[Rule('required|numeric|min:1')]
    public $category_id;
    #[Rule('required|numeric|min:1')]
    public $target_amount;
    #[Rule('nullable|numeric|min:0')]
    public $raised_amount;
    #[Rule('nullable|image|max:1024')]
    public $image_path;
    #[Rule('required|boolean')]
    public $is_public;
    public $step = 1;
    public $imagePreview;

    public $categories;

    public function updatedImagePath()
    {
        $this->imagePreview = $this->image_path->temporaryUrl();
    }

    public function incrementStep(): void
    {
        if ($this->step < 4) {
            $this->validateEachStep();
            $this->step++;
        }
    }

    protected function validateEachStep(): void
    {
        if ($this->step == 1) {
            $this->validateOnly('description');
        }
        if ($this->step == 2) {
            $this->validateOnly('story');
        }
        if ($this->step == 3) {
            $this->validateOnly('image_path');
        }
    }

    public function decrementStep(): void
    {
        $this->step--;
    }

    public function goToStep($step): void
    {
        $this->validateEachStep();
        $this->step = $step;
    }

    public function submit(): void
    {
        $this->validate();

        // Handle image upload
        if ($this->image_path) {
            $imageName = $this->image_path->store('fund-images', 'public');
        }

        // Save the fund details to the database
        $Fund = Fund::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'description' => $this->description,
            'slug' => \Str::slug($this->title) . '-' . \Str::random(5) . auth()->id(),
            'target_amount' => $this->target_amount,
            'raised_amount' => $this->raised_amount ?? 0,
            'image_path' => $imageName ?? null,
            'is_public' => $this->is_public,
        ]);

        session()->flash('message', 'Fundraiser created successfully!');

        // Redirect or additional logic
    }

    public function render(): View
    {
        $this->categories = Category::all();
        return view('livewire.forms.fundraiser-form', [
            'step' => $this->step,
            'categories' => $this->categories
        ])
            ->extends('layouts.app')
            ->section('content')
            ->title('Create Fund - Fund4Me');
    }
}
