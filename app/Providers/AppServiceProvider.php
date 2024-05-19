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
            return  Event::where(DB::raw("CONCAT(start_date, ' ', time)"), '>', Carbon::now())
            ->orderBy('start_date', 'asc')
            ->orderBy('time', 'asc')
            ->limit(5)
            ->get();
        }
        return [];
    }

    private function getEvents(){
        if(Schema::hasTable('events')){
            return Event::get();
        }
        return [];
    }
    private function getCategories(){
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

        View::composer('web.events', function ($view) {
            $view->with('events', $this->getEvents());
            $view->with('categories', $this->getCategories());
        });
    }
}
