<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\Ticket;
use Livewire\Component;

class SingleTicket extends Component
{
    public $ticketId;
    public $ticket;
    public $comments;
    public $newComment;

    public function mount($id)
    {
        $this->ticketId = $id;
        $this->ticket = Ticket::findOrFail($id);
        $this->comments = Comment::where('ticket_id', $id)->get();
        $this->newComment = '';
    }

    public function createComment()
    {
        $this->validate([
            'newComment' => 'required|string',
        ]);

        Comment::create([
            'ticket_id' => $this->ticketId,
            'user_id' => auth()->user()->id,
            'comment_text' => $this->newComment,
        ]);

        $this->newComment = ''; // Clear the comment text field after creating the comment
        $this->comments = Comment::where('ticket_id', $this->ticketId)->get(); // Refresh the comments
    }

    public function render()
    {
        return view('livewire.single-ticket')->extends('user_views.layouts.app');
    }
}