<?php

namespace App\Helpers\Facades;

use Illuminate\Support\Facades\Facade;

class SaveStr extends Facade {

    protected static function getFacadeAccessor(){
        return 'savestr';               //задаем имя абстрактной зависимостки которая должна будет подгрузиться в СЕРВИС_КОНТЕЙНЕР через СЕРВИС_ПРОВАЙДЕР
    }
}