<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class user_controller extends Controller
{
    //

    public function index()  {
        return view("user_views.index");
    }

    public function createticket()  {
        return view("user_views.create_tickect");
    }
    public function singleticket()  {
        return view("user_views.single_ticket");
    }
    public function tickets()  {
        return view("user_views.tickets");
    }
    public function learn()  {
        return view("tailwinLearn");
    }

    public function adminHome()  {
        $tickets = Ticket::all(); // Retrieve all tickets
        $latestTickets = Ticket::latest()->with('createdBy')->take(3)->get();
        $totalTickets = Ticket::count();
        $activeTickets = Ticket::where('status', 'open')->count();
        $resolvedTickets = Ticket::where('status', 'resolved')->count();
        
        return view('admin.index', [
            'tickets' => $tickets,
            'totalTickets' => $totalTickets,
            'activeTickets' => $activeTickets,
            'resolvedTickets' => $resolvedTickets,
            'latestTickets' => $latestTickets
        ]);
    }

    public function adminTickets(){
        return view('admin.tickets');
    }


    public function adminCategories(){
        return view('admin.ticketCategories');
    }
}