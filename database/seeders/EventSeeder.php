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
                'images' => (['assets/images/pendet-1.jpg', 'assets/images/pendet-2.jpeg']),
                'start_date' => Carbon::createFromFormat('d-m-Y', '15-12-2024'),
                'end_date' => Carbon::createFromFormat('d-m-Y', '20-12-2024'),
                'date' => Carbon::createFromFormat('d-m-Y', '21-12-2024'),
                'time' => Carbon::createFromTime(8, 30, 00)->format('H:i'),
                'location_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4061603.806302758!2d104.35402986572511!3d-6.209534793352163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827f2d620975%3A0xf19b7459bbee5ed5!2sUniversitas%20Brawijaya!5e0!3m2!1sen!2sid!4v1715865158541!5m2!1sen!2sid'
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
