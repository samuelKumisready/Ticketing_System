<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = [];
    // [ 'category_id', 'title', 'description', 'status',  'created_by', 'assigned_to'];

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function assignedTo()
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function commentCount()
    {
        return $this->comments->count();
    }
    public static function createTicket($category_id, $title, $description, $createdBy, $assignedTo = null)
    {
        return self::create([
            'title' => $title,
            'description' => $description,
            'status' => 'open',
            'category_id' => $category_id,
            'created_by' => $createdBy,
            'assigned_to' => $assignedTo,
        ]);
    }

    public static function searchAndFilterTickets($searchTerm, $category, $status)
    {
        return self::when($searchTerm, function (Builder $query, $searchTerm) {
            $query->where(function (Builder $query) use ($searchTerm) {
                $query->where('title', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('description', 'LIKE', '%' . $searchTerm . '%');
            });
        })
        ->when($category, function (Builder $query, $category) {
            $query->whereHas('category', function (Builder $query) use ($category) {
                $query->where('name', 'LIKE', '%' . $category . '%');
            });
        })
        ->when($status, function (Builder $query, $status) {
            $query->where('status', $status);
        })->latest()
        ->get();
    }
    public static function closeTicket($ticketId)
    {
        $ticket = self::find($ticketId);

        if ($ticket && $ticket->status === 'open') {
            $ticket->update(['status' => 'closed']);
        }
    }
    public static function openTicket($ticketId)
    {
        $ticket = self::find($ticketId);

        if ($ticket && $ticket->status === 'closed') {
            $ticket->update(['status' => 'open']);
        }
    }
}