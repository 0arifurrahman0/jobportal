<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password', 'verifyToken',
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
    *  One to many relation with user profile
    */ 
    public function profile()
    {

        return $this->hasOne(Profile::class);

    }

    public function academic()
    {

        return $this->hasMany(Academic::class);

    }

    public function training()
    {

        return $this->hasMany(Training::class);

    }

    public function professional()
    {

        return $this->hasMany(Professional::class);

    }

    public function experience()
    {

        return $this->hasMany(Experience::class);

    }  

    public function language()
    {

        return $this->hasMany(LanguageProficiency::class);

    }      

    public function reference()
    {

        return $this->hasMany(Reference::class);

    } 

}
