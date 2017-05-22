<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{

	protected $fillable = ['user_id','company','business','position','department','skill','duty','location','startDate','endDate'];

	public function user()
	{

		return $this->belongsTo(User::class);

	}

}
