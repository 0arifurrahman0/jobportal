<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Job;

class ApplyController extends Controller
{

	public function __construct()
	{

		$this->middleware('auth');

	}

    public function store(Job $job)
    {

    	$job->apply();

    	return back();

    }

}
