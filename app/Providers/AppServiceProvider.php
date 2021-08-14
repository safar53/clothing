<?php

namespace App\Providers;

use App\About;
use App\Service;
use App\InstagramPost;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $service = Service::take(6)->get();
            $contact = About::orderBy('id', 'DESC')->first();
            $insta_posts = InstagramPost::take(6)->get();

            $view->with('contact_informations', $contact)->with('service', $service)->with('insta_posts', $insta_posts);
        });
    }
}
