<?php

namespace App\Providers;
use View;
use App\Category;
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
       // View::share('name','Diba Rani Ahamad');
        View::composer('front-end.includes.header',function($view){
            $view->with('categories',$categories= Category::where('published',1)->get());
       });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
