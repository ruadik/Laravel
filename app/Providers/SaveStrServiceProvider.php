<?php

namespace App\Providers;

use App\Helpers\SaveEloquentOrm;
use App\Helpers\SaveFile;
use Illuminate\Support\ServiceProvider;


class SaveStrServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

//        $this->app->bind('App\Helpers\Contracts\SaveStr', function(){       //подключаем интерфейс(контракт)
        $this->app->bind('savestr', function(){  //подключаем фасад, при зарузке помещается в СЕРВИС КОНТЕЙНЕР с интерфейсом и выбранной реализацией
//        $this->app->singleton('App\Helpers\Contracts\SaveStr', function(){  //подключаем интерфейс(контракт) запускает один раз и все
//          return new SaveEloquentOrm();
            return new SaveFile();                                             //вызываем необходимый реализатор(метод)
        });

        //////Вызов интерфайсу конкретную реализацию////
//        $this->app->bind('App\Helpers\Contracts\SaveStr', 'App\Helpers\SaveFile');


//        /////////////Добавление существующего объекта в сервис контейнер////////////////////
//        $obj = new SaveFile();
//        $this->app->instance('App\Helpers\Contracts\SaveStr', $obj);
//        dd($this->app->make('App\Helpers\Contracts\SaveStr'));
//        //////////////////////////////////////////////////

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
