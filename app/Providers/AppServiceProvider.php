<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\TheLoai;
use App\Model\LoaiTin;
use Illuminate\Support\Facades\Auth;

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
        view()->composer('layout',function($view){
          $theloai = TheLoai::where('AnHien', '=', 1)->where('lang','vi')->orderBy('TenTL')->take(6)->get();
          $view->with(['theloai'=>$theloai]);
        });

        view()->composer('admin.layoutadmin', function ($view) {
           $user = Auth::user();
           $view->with(['user' =>$user]);
       });
    }
}
