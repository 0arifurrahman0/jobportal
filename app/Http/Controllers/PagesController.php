<?php

namespace App\Http\Controllers;

use App\Category;

use App\Theme;

use App\Job;

use Illuminate\Http\Request;


class PagesController extends Controller
{

	// default home page
    public function index()
    {

        $jobs =  Job::latest()->get();

        $categories = Category::all();

    	return view('pages.index', compact('jobs','categories'));

    }

    public function show($category, $job)
    {

        // $categoryId = Category::where('id', $job)->first()->id;

        $job = Job::where('id', $job)->first();

        return view('pages.viewjob', compact('job'));

    }

    public function showCategoryJob($categorySlug = null)
    {

        $categoryId = Category::where('slug', $categorySlug)->first()->id;

        $jobs = Job::where('category_id', $categoryId)->latest()->get();

        return view('pages.viewcatjob', compact('jobs'));

    }


    // signup form for seeker and employeer
    public function signup()
    {

    	return view('pages.signup');

    }

    public function themeUpdate(Request $request)
    {

        Theme::where('id', 1)->update(['name' => $request->name]);

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully updated!
            </div>

        ']);

    }

}
