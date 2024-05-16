<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ticket_section_id',
        'name',
        'email',
        'phone',
        'status',
        'quantity',
        'tax',
        'total_price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function ticketSection()
    {
        return $this->belongsTo(TicketSection::class, 'ticket_section_id', 'id');
    }
}
