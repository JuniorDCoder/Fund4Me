<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Livewire\Component;

class SideBar extends Component
{
    public $isSidebarVisible = false;

    public function toggleSidebar(): void
    {
        $this->isSidebarVisible = !$this->isSidebarVisible;
    }

    public function closeSidebar(): void
    {
        $this->isSidebarVisible = false;
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function render(): View
    {
        return view('livewire.side-bar');
    }
}
