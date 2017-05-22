<?php

namespace App\Http\Controllers;

use Auth;

use Image;

use App\Employer;

use App\Emprofile;

use App\Category;

use App\Http\Requests\EmployerProfile;

use App\Http\Requests\Jobpost;

use Illuminate\Http\Request;

class EmployerController extends Controller
{

	public function __construct()
	{

		$this->middleware('employer');

	}

	public function profile()
	{

        $id = Auth::guard('employer')->user()->id;

        $profile = Employer::find($id)->profile;

        $categories = Category::all();

		return view('employer.pages.profile', compact('profile','categories'));

	}

	public function profileUpdate(EmployerProfile $form)
	{

        $form->employerProfileUpdate();

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully updated!
            </div>

        ']);		

	}

	public function logoUpdate(Request $request)
	{

        $this->validate($request, [

            'logo' => 'required|image|mimes:jpeg,png,jpg|max:1024',

        ]);

        if ($request->hasFile('logo')) {

            if ($request->file('logo')->isValid()) {
               
                $id = Auth::guard('employer')->user()->id;

                $logo = $request->file('logo');

                $filename = $id.'.'.time().'.'.$logo->extension();

                Image::make($logo)->resize(300,300)->save(public_path('/images/brand/'.$filename));


                Emprofile::where('id', $id)->update([

                    'logo'    =>  $filename,

                ]);

                return back();
            }
        }  

	}

	public function jobForm()
	{

        $id = Auth::guard('employer')->user()->id;

        $profile = Employer::find($id)->profile;

        $categories = Category::all();

		return view('employer.pages.job', compact('profile','categories'));

	}

	public function jobPost(Jobpost $form)
	{

        $form->employerJobPost();

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully updated!
            </div>

        ']);		

	}


}
