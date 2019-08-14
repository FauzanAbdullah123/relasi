<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        schema::defaultStringLength(191);   

        view()->composer('frontend.blog.side', function ($view) {
            $kategori = \App\Kategori::all();
            $tag = \App\Tag::all();
            $recent = \App\Artikel::orderBy('created_at', 'desc')->take(4)->get();
            $view->with(compact('kategori','tag', 'recent'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
