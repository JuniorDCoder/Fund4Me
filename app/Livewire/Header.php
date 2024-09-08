<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Header extends Component
{
    public $isMenuOpen = false;
    public $isDropdownOpen = false;
    public $userName;

    public function mount()
    {
        if(auth()->check()){
            $this->userName = auth()->user()->name;
        }
    }

    public function toggleMenu()
    {
        $this->isMenuOpen = !$this->isMenuOpen;
    }

    public function toggleDropdown()
    {
        $this->isDropdownOpen = !$this->isDropdownOpen;
    }

    #[On('refresh-profile')]
    public function refreshUserName()
    {
        $this->userName = auth()->user()->name;
    }

    public function render()
    {
        return view('livewire.header');
    }
}

