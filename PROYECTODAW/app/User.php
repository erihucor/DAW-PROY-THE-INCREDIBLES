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
            protected $fillable = ['user','password','rol_id','estado_id','ci'];
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
	
	/*Relaciones entre modelos*/
	
	public function roles(){
		return $this->hasOne('Rol');
	}
	
	public function estados(){
		return $this->hasOne('Estado');
	}
	
	public function personas(){
		return $this->hasOne('Persona');
	}
}
