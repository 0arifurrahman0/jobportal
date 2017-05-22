<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LanguageProficiency extends Model
{

	protected $fillable = ['user_id','language','writing','reading','speaking'];

	public function user()
	{

		return $this->belongsTo(User::class);

	}

}
