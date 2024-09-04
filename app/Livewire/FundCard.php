<?php

namespace App\Livewire;

use Livewire\Component;

class FundCard extends Component
{
    public $title;
    public $amount;
    public $amountDonated;
    public $category;
    public $daysLeft;

    public function render()
    {
        return view('livewire.fund-card');
    }
}
