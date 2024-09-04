<?php

namespace App\Livewire\Forms;

use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    #[Rule('required|email|exists:users,email')]
    public $email;
    #[Rule('required|min:6')]
    public $password;
    public function render()
    {
        return view('livewire.forms.login-form');
    }

    public function login(){
        $this->validate();
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            return redirect()->route('dashboard');
        } else {
            $this->addError('email', 'The provided credentials do not match our records.');
        }
    }
}
