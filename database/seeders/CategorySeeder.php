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
                'image' => 'assets/images/music.jpg',
            ],
            [
                'name' => 'Dance',
                'image' => 'assets/images/dance.jpg',
            ],
            [
                'name' => 'Theatre',
                'image' => 'assets/images/theatre.jpg',
            ],
            [
                'name' => 'Philology',
                'image' => 'assets/images/philology.jpg',
            ],
            [
                'name' => 'Art',
                'image' => 'assets/images/art.jpg',
            ],
            [
                'name' => 'Food',
                'image' => 'assets/images/food.jpg',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
