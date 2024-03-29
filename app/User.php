<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','login'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];




    public function country(){
        //
        return $this->hasOne('App\Country', 'user_id', 'id');
    }

    public function articles(){
        return $this->hasMany('App\Article');
    }

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    public function getNameAttribute($value){
        return 'Забрал методом get - '.$value;
    }


    public function setNameAttribute($value){
        $this->attributes['name']='**** '.$value.' ****';
    }


}



