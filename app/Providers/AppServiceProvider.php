<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    private function getUpcomingEvents()
    {
        if(Schema::hasTable('events')){
            $events = Event::where(DB::raw("CONCAT(start_date, ' ', time)"), '>', Carbon::now())
            ->orderBy('start_date', 'asc')
            ->orderBy('time', 'asc')
            ->get();

            return $events;
        }
        return [];
    }

    public function getCategories(){
        if(Schema::hasTable('categories')){
            return Category::get();
        }
        return [];
    }
    public function boot(): void
    {
        View::composer('web.home', function ($view) {
            $view->with('upcomingEvents', $this->getUpcomingEvents());
            $view->with('categories', $this->getCategories());
        });
    }
}
