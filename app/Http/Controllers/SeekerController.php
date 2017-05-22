<?php

namespace App\Http\Controllers;

use Auth;

use Image;

use PDF;

use App\User;

use App\Category; 

use Illuminate\Http\Request;

use App\Http\Requests\SeekerPersonal;

use App\Http\Requests\SeekerCareer;

use App\Http\Requests\SeekerPreferred;

use App\Http\Requests\SeekerAvatar;

use App\Http\Requests\SeekerAcademic;

use App\Http\Requests\SeekerTraining;

use App\Http\Requests\SeekerProfessional;

use App\Http\Requests\SeekerExperience;

use App\Http\Requests\SeekerLanguage;

use App\Http\Requests\SeekerReference;

class SeekerController extends Controller
{

    public function __construct()
    {

        $this->middleware('auth');

    }


    /**
    *  Show Seeker Welcome message
    */    
    public function index()
    {

    	return view('seeker.pages.welcome');

    }

    /**
    *  Show Seeker resume form with data
    */ 
    public function editResume()
    {

        $id = Auth::guard('web')->user()->id;

        $profile = User::find($id)->profile;

        $user = User::where('id', $id)->first();

        $academics = User::find($id)->academic;

        $trainings = User::find($id)->training;

        $professionals = User::find($id)->professional;

        $experiences = User::find($id)->experience;

        $languages = User::find($id)->language;

        $references = User::find($id)->reference;

        return view('seeker.pages.editresume', compact('profile','user','academics','trainings','professionals','experiences','languages','references'));

    }

    public function personalShow()
    {

        $id = Auth::guard('web')->user()->id;

        $profile = User::find($id)->profile;

        return view('seeker.pages.updatepersonal', compact('profile'));

    }

    public function personalUpdate(SeekerPersonal $form)
    {

        $form->seekerPersonalUpdate();

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully updated!
            </div>

        ']);

    }

    public function careerShow()
    {

        $id = Auth::guard('web')->user()->id;

        $profile = User::find($id)->profile;

        return view('seeker.pages.updatecareer', compact('profile'));

    } 

    public function careerUpdate(SeekerCareer $form)
    {

        $form->seekerCareerUpdate();

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully updated!
            </div>

        ']);

    }    

    public function preferredShow()
    {

        $id = Auth::guard('web')->user()->id;

        $profile = User::find($id)->profile;

        $categories = Category::all();

        return view('seeker.pages.updatepreferred', compact('profile','categories'));

    }

    public function preferredUpdate(SeekerPreferred $form)
    {

        $form->seekerPreferredUpdate();

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully updated!
            </div>

        ']);

    }

    public function avatarUpload(Request $request)
    {       

        $this->validate($request, [

            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:1024',

        ]);

        if ($request->hasFile('avatar')) {

            if ($request->file('avatar')->isValid()) {
               
                $id = Auth::guard('web')->user()->id;

                $avatar = $request->file('avatar');

                $filename = $id.'.'.time().'.'.$avatar->extension();

                Image::make($avatar)->resize(300,300)->save(public_path('/images/avatars/'.$filename));


                User::where('id', $id)->update([

                    'avatar'    =>  $filename,

                ]);

                return response()->json(['success' => '

                    <div class="alert alert-dismissible alert-success">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      Your information was successfully updated!
                    </div>

                ']);
            }
        }         

    }

    public function academicShow()
    {

        return view('seeker.pages.academic');

    }

    public function academicCreate(SeekerAcademic $form)
    {

        $form->seekerAcademicCreate();

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully submitted!
            </div>

        ']);        

    }


    public function trainingShow()
    {

        return view('seeker.pages.training');

    }

    public function trainingCreate(SeekerTraining $form)
    {

        $form->seekerTrainingCreate();

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully submitted!
            </div>

        ']);        

    }   

    public function professionalShow()
    {

        return view('seeker.pages.professional');

    }

    public function professionalCreate(SeekerProfessional $form)
    {

        $form->seekerProfessionalCreate();

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully submitted!
            </div>

        ']);        

    }

    public function employmentShow()
    {

        return view('seeker.pages.employment');
        
    }

    public function employmentCreate(SeekerExperience $form)
    {

        $form->seekerExperienceCreate();

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully submitted!
            </div>

        ']);        

    }

    public function languageShow()
    {

        return view('seeker.pages.language');
        
    }

    public function languageCreate(SeekerLanguage $form)
    {

        $form->seekerLanguageCreate();

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully submitted!
            </div>

        ']);        

    }


    public function referenceShow()
    {

        return view('seeker.pages.reference');
        
    }    

    public function referenceCreate(SeekerReference $form)
    {

        $form->seekerRelationCreate();

        return response()->json(['success' => '

            <div class="alert alert-dismissible alert-success">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Your information was successfully submitted!
            </div>

        ']);        

    }

    public function viewResume(){

        $id = Auth::guard('web')->user()->id;

        $profile = User::find($id)->profile;

        $user = User::where('id', $id)->first();

        $academics = User::find($id)->academic;

        $trainings = User::find($id)->training;

        $professionals = User::find($id)->professional;

        $experiences = User::find($id)->experience;

        $languages = User::find($id)->language;

        $references = User::find($id)->reference;

        return view('seeker.pages.viewresume', compact('profile','user','academics','trainings','professionals','experiences','languages','references'));        

    }

    public function pdfGenerator()
    {

        $id = Auth::guard('web')->user()->id;

        $profile = User::find($id)->profile;

        $user = User::where('id', $id)->first();

        $academics = User::find($id)->academic;

        $trainings = User::find($id)->training;

        $professionals = User::find($id)->professional;

        $experiences = User::find($id)->experience;

        $languages = User::find($id)->language;

        $references = User::find($id)->reference;

        // return view('seeker.pages.pdf', compact('profile','user','academics','trainings','professionals','experiences','languages','references'));


        $pdf = PDF::loadView('seeker.pages.pdf',[

            'profile' => $profile,
            'user' => $user,
            'academics' => $academics,
            'trainings' => $trainings,
            'professionals' => $professionals,
            'experiences' => $experiences,
            'languages' => $languages,
            'references' => $references,

        ]);

        return $pdf->download('cv.pdf');

    }


}
