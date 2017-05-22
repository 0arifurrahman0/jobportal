<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professional extends Model
{

	protected $fillable = ['user_id','certification','institute','location','startDate','endDate'];

	public function user()
	{

		return $this->belongsTo(User::class);

	}

}
