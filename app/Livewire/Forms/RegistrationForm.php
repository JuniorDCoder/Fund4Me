<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Auth;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Hash;

class RegistrationForm extends Component
{
    #[Rule('required|string|max:255')]
    public $name;
    #[Rule('required|email')]
    public $email;
    #[Rule('required|numeric|min:9')]
    public $phone_number;
    #[Rule('required|string|min:6')]
    public $password;


    public function register(){
        $this->validate();
        // Register the user
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'password' => Hash::make($this->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }
    public function render()
    {
        return view('livewire.forms.registration-form');
    }
}
