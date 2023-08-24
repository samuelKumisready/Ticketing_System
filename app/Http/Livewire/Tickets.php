<?php

namespace App\Http\Livewire;

use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Tickets extends Component
{
    public $tickets;
    public function mount()
    {
        $user = Auth::user();
        $this->tickets = Ticket::with('category')->withCount('comments')->where('created_by', $user->id) ->latest('created_at')->get();
    }
    public function viewTicket($ticketId)
    {
        return Redirect::route('singleTicket', ['id' => $ticketId]);
    }
    public function render()
    {
        return view('livewire.tickets');
    }

}