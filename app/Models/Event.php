<?php

namespace App\Models;

use Carbon\Carbon;
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
        'location_map'
    ];

    protected function casts(): array{
        return [
            'images' => 'array',
            'start_date' => 'date',
            'end_date' => 'date',
            'date' => 'date',
            'time' => 'datetime:H:i'
        ];
    }
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

        // Accessor for start_date
        public function getStartDateAttribute($value)
        {
            return Carbon::parse($value)->translatedFormat('d F Y');
        }

        // Accessor for end_date
        public function getEndDateAttribute($value)
        {
            return Carbon::parse($value)->translatedFormat('d F Y');
        }

        // Accessor for date
        public function getDateAttribute($value)
        {
            return Carbon::parse($value)->translatedFormat('d F Y');
        }

        public function getTimeAttribute($value)
        {
            return Carbon::createFromFormat('H:i:s', $value)->format('H:i');
        }
}
