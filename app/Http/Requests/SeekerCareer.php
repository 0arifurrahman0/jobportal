<?php

namespace App\Http\Requests;

use App\Profile;

use App\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SeekerCareer extends FormRequest
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
            
            'seObjective'    => 'required',

        ];
    }

    public function messages()
    {

        return [

            'seObjective.required' => 'Objective is most important, write this!',

        ];

    }

    public function seekerCareerUpdate()
    {

        $id = Auth::guard('web')->user()->id;

        Profile::where('id', $id)->update([

            'seObjective'           =>  $this->seObjective,
            'seCareerSummary'       =>  $this->seCareerSummary,
            'seSpecialQualification'=>  $this->seSpecialQualification,
            'sePresentSalary'       =>  $this->sePresentSalary,
            'seJobLevel'            =>  $this->seJobLevel,
            'seExpectedSalary'      =>  $this->seExpectedSalary,
            'seAvailable'           =>  $this->seAvailable,

        ]);        

    }

}
