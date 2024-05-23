<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TicketSection;

class TicketSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ticketSections = [
            [
                'event_id' => 1,
                'name' => 'VVIP',
                'description' => 'VIP Ticket',
                'quantity' => 100,
                'price' => 200000,
            ],
            [
                'event_id' => 1,
                'name' => 'VIP',
                'description' => 'VIP Ticket',
                'quantity' => 100,
                'price' => 100000,
            ],
            [
                'event_id' => 1,
                'name' => 'Regular',
                'description' => 'Regular Ticket',
                'quantity' => 1000,
                'price' => 50000,
            ],
        ];

        foreach ($ticketSections as $ticketSection) {
            TicketSection::create($ticketSection);
        }
    }
}
