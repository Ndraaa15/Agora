<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;
use Carbon\Carbon;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carbon::setLocale('id');
        setlocale(LC_TIME, 'id_ID');

        $events = [
            [
                'name' => 'Tari Pendet',
                'organizer' => 'PT Kreasi Abadi',
                'category_id' => 1,
                'province' => 'Badung',
                'city' => 'Bali',
                'description' => 'Ini adalah tari pendet yang sangat bagus',
                'images' => json_encode(['assets/images/upcoming-event-1.jpg']),
                'start_date' => Carbon::createFromFormat('d-m-Y', '15-12-2024'),
                'end_date' => Carbon::createFromFormat('d-m-Y', '20-12-2024'),
                'date' => Carbon::createFromFormat('d-m-Y', '21-12-2024'),
                'time' => Carbon::createFromTime(8, 30, 00)->format('H:i'),
                'location_map' => 'map.google.com'
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
