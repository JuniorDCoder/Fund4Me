<?php

namespace App\Livewire;

use Livewire\Component;

class FundCard extends Component
{
    public $fund;

    public $id;
    public $slug;
    public $image_path;
    public $title;
    public $amount;
    public $amountDonated;


    public function mount($fund): void
    {
        $this->fund = $fund;
        // Extract attributes from the fund object
        $this->id = $fund['id'];
        $this->slug = $fund['slug'];
        $this->image_path = $fund['image_path'];
        $this->title = $fund['title'];
        $this->amount = $fund['target_amount'];
        $this->amountDonated = $fund['raised_amount'];
        $this->category = $fund['category'];
        $this->daysLeft = $fund['days_left'];
    }

    public function render()
    {
        return view('livewire.fund-card');
    }
}
