<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketCategory extends Model
{
    use HasFactory;

    protected $table = 'ticket_categories';
    public $timestamps = false;

    protected $fillable = ['ticket_id', 'category_id'];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}