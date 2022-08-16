<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\danhmuc;
use App\loaisanpham;
use Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('master.header',function($view){
            $danhmuc=danhmuc::all();
            $view->with('danhmuc',$danhmuc);
        });
        view()->composer('master.header',function($view1){
            $loaisanpham=loaisanpham::all();
            $view1->with('loaisanpham',$loaisanpham);
        });
        view()->composer('master.header',function($view1){
            $content=Cart::content();
            $view1->with('content',$content);
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
