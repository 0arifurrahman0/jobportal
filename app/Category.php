<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('replyCount', function ($builder)
        {

            $builder->withCount('totaljobs');
            
        });

    }


	public function totaljobs()
	{

		return $this->hasMany(Job::class);

	}

}
