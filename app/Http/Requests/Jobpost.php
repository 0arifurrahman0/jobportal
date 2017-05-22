<?php

namespace App\Http\Requests;

use App\Job;

use App\Employer;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class Jobpost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'category_id'    => 'required',
            'title'    => 'required',
            'vacancie'    => 'required',
            'cvType'    => 'required',
            'instruction'    => 'required',
            'deadline'    => 'required',
            'gender'    => 'required',
            'jobLevel'    => 'required',
            'qualification'    => 'required',
            'responsibility'    => 'required',
            'location'    => 'required|not_in:0',
            'require'    => 'required',
            'salary'    => 'required',
            'benefits'    => 'required',

        ];
    }

    public function messages()
    {

        return [

            'category_id.required' => 'Need category id',
            'title.required' => 'Need job title',
            'vacancie.required' => 'Need job vacancie',
            'cvType.required' => 'Need way to receive cv',
            'instruction.required' => 'Need job instruction',
            'deadline.required' => 'Need job deadline',
            'gender.required' => 'Need gender',
            'jobLevel.required' => 'Need jobLevel',
            'qualification.required' => 'Need qualification',
            'responsibility.required' => 'Need job responsibility',
            'location.not_in' => 'Need job location',
            'require.required' => 'Need job requirements',
            'salary.required' => 'Need job salary',
            'benefits.required' => 'Need job benefits',

        ];

    }


    public function employerJobPost()
    {

        $id = Auth::guard('employer')->user()->id;


        Job::create([

            'employer_id'        =>  $id,
            'category_id'        =>  $this->category_id,
            'title'              =>  $this->title,
            'vacancie'           =>  $this->vacancie,
            'cvType'             =>  $this->cvType,
            'instruction'        =>  $this->instruction,
            'deadline'           =>  $this->deadline,
            'ageFrom'            =>  $this->ageFrom,
            'ageTo'              =>  $this->ageTo,
            'gender'             =>  $this->gender,
            'jobLevel'           =>  $this->jobLevel,
            'qualification'      =>  $this->qualification,
            'context'            =>  $this->context,
            'responsibility'     =>  $this->responsibility,
            'experience'         =>  $this->experience,
            'require'            =>  $this->require,
            'expFrom'            =>  $this->expFrom,
            'expTo'              =>  $this->expTo,
            'location'           =>  $this->location,
            'salary'             =>  $this->salary,
            'benefits'           =>  $this->benefits,

        ]);

    }
}
