<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use Livewire\Attributes\Rule;

class EditProfileForm extends Component
{
    #[Rule('required|string|max:255')]
    public $name;

    #[Rule('required|email')]
    public $email;

    #[Rule('required|numeric|min:9')]
    public $phone_number;

    public function mount()
    {
        $user = auth()->user();
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone_number = $user->phone_number;
    }

    public function updateProfile()
    {
        // Validate properties
        $this->validate();

        // Update user profile
        auth()->user()->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
        ]);

        session()->flash('success', 'Profile updated successfully');

        $this->dispatch('refresh-profile');
    }

    public function render()
    {
        return view('livewire.forms.edit-profile-form');
    }
}

