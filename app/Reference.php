<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{

	protected $fillable = ['user_id','name','designation','mobile','email','relation','organization','phoneOffice','address'];

	public function user()
	{

		return $this->belongsTo(User::class);

	}

}
