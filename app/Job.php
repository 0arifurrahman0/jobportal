<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $guarded = [];

    public function path()
    {
        return "/job/{$this->category->slug}/{$this->id}";
    }

	public function creator()
	{

		return $this->belongsTo(Emprofile::class, 'employer_id');

	}

    public function category()
    {

        return $this->belongsTo(Category::class);
        
    }

    public function applies()
    {

        return $this->morphMany(Apply::class, 'applied');

    }

    public function apply()
    {

        $attributes = ['user_id' => auth()->id()];

        if (! $this->applies()->where($attributes)->exists()) {
            
            return $this->applies()->create($attributes);

        }

    }

    public function isApplied()
    {

        return $this->applies()->where('user_id', auth()->id())->exists();

    }    


}
