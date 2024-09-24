<?php

namespace App\Livewire;

use Illuminate\View\View;
use Livewire\Component;
use Livewire\Attributes\On;

class Header extends Component
{
    public $isMenuOpen = false;
    public $isDropdownOpen = false;
    public $userName;

    public function mount(): void
    {
        if(auth()->check()){
            $this->userName = auth()->user()->name;
        }
    }

    public function toggleMenu(): void
    {
        $this->isMenuOpen = !$this->isMenuOpen;
    }

    public function toggleDropdown(): void
    {
        $this->isDropdownOpen = !$this->isDropdownOpen;
    }

    #[On('refresh-profile')]
    public function refreshUserName(): void
    {
        $this->userName = auth()->user()->name;
    }

    public function render(): View
    {
        return view('livewire.header');
    }
}

