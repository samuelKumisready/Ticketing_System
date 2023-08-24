<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutUser extends Component
{

    public function logout()
    {
        Auth::logout();

        // Redirect the user to the desired page after logout
        // You can change the 'login' route to any route you want
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.logout-user');
    }
}