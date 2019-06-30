<?php

namespace App\Providers;

use App\Article;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;
use Blade;
use DB;
use Log;


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
        //
        Blade::directive('myDir',function ($var){
            return "<h1> New MY Directive - $var </h1>";
        });

        //
        Response::macro('myRes', function ($value){

            return Response::make($value);

        });


//        Выводит строки выполняющегося запроса
//        DB::listen(function ($query){
//            dump($query->sql);
//            dump($query->bindings);
//
//        });

        Article::created(function(Article $article){
            Log::info('Article save from AppServiceProvider:', [$article->user->name=>$article->name]);
        });

    }
}
