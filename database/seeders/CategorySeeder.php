<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Music',
                'image' => 'music.jpg',
            ],
            [
                'name' => 'Dance',
                'image' => 'dance.jpg',
            ],
            [
                'name' => 'Theatre',
                'image' => 'theatre.jpg',
            ],
            [
                'name' => 'Philology',
                'image' => 'philology.jpg',
            ],
            [
                'name' => 'Art',
                'image' => 'art.jpg',
            ],
            [
                'name' => 'Food',
                'image' => 'food.jpg',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
