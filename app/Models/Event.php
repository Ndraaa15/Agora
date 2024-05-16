<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'organizer',
        'category_id',
        'province',
        'city',
        'description',
        'image',
        'start_date',
        'end_date',
        'date',
        'time',
        'location'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function ticketSections()
    {
        return $this->hasMany(TicketSection::class, 'event_id', 'id');
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class, 'event_id', 'id');
    }


}
