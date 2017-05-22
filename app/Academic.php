<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Academic extends Model
{
    
	protected $fillable = ['user_id','eduLevel','examTitle','majorGroup','instName','resultType','passYear','marks','cgpa','scale'];


	public function user()
	{

		return $this->belongsTo(User::class);

	}

}
