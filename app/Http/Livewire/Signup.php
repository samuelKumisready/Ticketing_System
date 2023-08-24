<?php
namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Signup extends Component
{
    public $name;
    public $email;
    public $password;
    // public $passwordConfirmation;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:8|',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.signup');
    }

    public function signup()
    {
        $this->validate();

        User::createUser
        (
            $this->name,
            $this->email,
            $this->password
        );
        redirect()->route('login');
    }
}