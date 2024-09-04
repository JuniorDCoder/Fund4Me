<?php

namespace App\Livewire;

use Livewire\Component;

class Header extends Component
{
    public $isMenuOpen = false;
    public $isDropdownOpen = false;

    public function toggleMenu()
    {
        $this->isMenuOpen = !$this->isMenuOpen;
    }

    public function toggleDropdown()
    {
        $this->isDropdownOpen = !$this->isDropdownOpen;
    }

    public function render()
    {
        return view('livewire.header');
    }
}
