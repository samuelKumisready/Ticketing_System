<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Ticket;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateTicketWire extends Component
{
    // use WithFileUploads;
    public $category_id;
    public $subject;
    public $description;
    // public $file;

    // public function mount(){
        
    //     $this->categories=Category::all();
    // }
    public function render()
    {
        $categories = Category::all();

        return view('livewire.create-ticketwire', compact('categories'));
    }

    public function submitTicket()
    {
        $this->validate([
            'category_id' => 'required|exists:categories,id',
            'subject' => 'required|string|max:255',
            'description' => 'required|string',
            // 'file' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        ]);

        // Upload file if provided
        // $filePath = null;
        // if ($this->file) {
        //     $filePath = $this->file->store('ticket_files');
        // }

        // Create the ticket
        // Ticket::create([
        //     'title' => $this->subject,
        //     'description' => $this->description,
        //     'category_id' => $this->category_id,
        //     'created_by' => auth()->user()->id,
        //     'assigned_to' => null,
        //     'status' => 'open',
        //     // 'file_path' => $filePath,
        // ]);
     
        Ticket::createTicket(
            $this->category_id, $this->subject, $this->description, auth()->user()->id
        );

        // Clear form fields
        $this->reset(['category_id', 'subject', 'description', ]);

        // Show success message
        session()->flash('success', 'Ticket submitted successfully.');
    }
}