<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{

	protected $fillable = ['user_id','title','topic','institute','location','country','year','duration'];

	public function user()
	{

		return $this->belongsTo(User::class);

	}
    
}
