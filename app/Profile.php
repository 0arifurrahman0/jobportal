<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = ['user_id','seEmail'];


    /**
    *  One to many relation with user
    */
    public function user()
    {

    	return $this->belongsTo(User::class);

    }


}
