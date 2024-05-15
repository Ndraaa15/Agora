<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    private function getUpcomingEvents(): array
    {
        return [
            [
                'image' => 'assets/images/upcoming-event-1.jpg',
                'name' => 'Tari Pendet',
                'price' => 'IDR 100.000',
                'province' => 'Jakarta',
                'city' => 'Jakarta Pusat',
            ],
            [
                'image' => 'assets/images/upcoming-event-1.jpg',
                'name' => 'Tari Pendet',
                'price' => 'IDR 100.000',
                'province' => 'Jakarta',
                'city' => 'Jakarta Pusat',
            ],
            [
                'image' => 'assets/images/upcoming-event-1.jpg',
                'name' => 'Tari Pendet',
                'price' => 'IDR 100.000',
                'province' => 'Jakarta',
                'city' => 'Jakarta Pusat',
            ],
        ];
    }

    public function getCategories(): array{
        return [
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

    }
    public function boot(): void
    {
        View::composer('web.home', function ($view) {
            $view->with('upcomingEvents', $this->getUpcomingEvents());
            $view->with('categories', $this->getCategories());
        });
    }
}
