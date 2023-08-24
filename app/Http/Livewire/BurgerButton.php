<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BurgerButton extends Component
{
    public $showContent = false;

    public function toggleContent()
    {
        $this->showContent = !$this->showContent;
    }

    public function render()
    {
        return view('livewire.burger-button');
    }
}