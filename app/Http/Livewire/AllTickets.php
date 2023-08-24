<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Carbon\Carbon;
use App\Models\Comment;
use App\Models\Ticket;
use Livewire\Component;

class AllTickets extends Component
{
    public $comments;
    public $tickets;
    public $selectedTicketId;
    public $selectedTicket;
    public $searchTerm;
    public $selectedCategory;
    public $selectedStatus;
    public $categories;

    public function mount()
    {
        $this->comments = Comment::all();
        // $this->tickets = Ticket::latest()->get();
        $this->categories = Category::all(); // Fetch the categories

        $this->filterTickets();
    }

    public function showTicketDetails($ticketId)
    {
        $this->selectedTicketId = $ticketId;
        $this->selectedTicket = Ticket::findOrFail($ticketId);
    }

    public function sendComment()
    {
        // Your sendComment logic goes here
    }

    public function filterTickets()
    {
        $this->tickets = Ticket::searchAndFilterTickets(
            $this->searchTerm,
            $this->selectedCategory,
            $this->selectedStatus
        );
    }

    public function render()
    {
        $currentTime = Carbon::now();

        // Calculate time difference for each comment
        foreach ($this->comments as $comment) {
            $commentTime = Carbon::parse($comment->created_at);
            $comment->timeDifference = $currentTime->diffInHours($commentTime);
        }

        return view('livewire.all-tickets', [
            'currentTime' => $currentTime,
       
        ]);
    }
    public function closeTicket($ticketId)
    {
        Ticket::closeTicket($ticketId);
        
        $this->emit('ticketClosed');
    }
    public function openTicket($ticketId)
    {
        Ticket::openTicket($ticketId);
        
        $this->emit('ticketOpened');
    }
}