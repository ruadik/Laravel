<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;
    //
    protected $table='articles';
    protected $primeryKey = 'id';
    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = ['name','text','img'];
    protected $guarded = ['text'];

    protected $dates = ['deleted_at'];



    public function user(){

        return $this->belongsTo('App\User');

    }




//        Метод читателей (get) геттер
    public function getNameAttribute($value){
        return 'Hello world - '.$value.' - Hello world';
    }



//        Метод преоброзаватель (set) сеттер
    public function setNameAttribute($value){

        //kod

        $this->attributes['name'] = '|'.$value.'|';
    }


//    Преобразует параметры значения при вызове из БД
    public $casts = [
                    'img' => 'boolean',
                    'text' => 'array'
                    ];






}
