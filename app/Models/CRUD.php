<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CRUD extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'organizer',
        'category_id',
        'province',
        'city',
        'description',
        'images',
        'start_date',
        'end_date',
        'date',
        'time',
        'location_map',
    ];
}
