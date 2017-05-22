<?php

namespace App\Http\Requests;

use App\User;

use App\Experience;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SeekerExperience extends FormRequest
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

            'company'       => 'required',
            'business'      => 'required',
            'position'      => 'required',
            'skill'         => 'required',
            'duty'          => 'required',
            'location'      => 'required',
            'startDate'     => 'required',
            'endDate'      => 'required',

        ];
    }

    public function messages()
    {

        return [

            'company.required'  => 'Write your company name',
            'business.required' => 'Write your business type',
            'position.required' => 'Write your job designation',
            'skill.required'    => 'Write your area of experiences',
            'duty.required'     => 'Write your responsibilities for job',
            'location.required' => 'Write your company location',
            'startDate.required'=> 'Write your joining date',
            'endDate.required'  => 'Write your ending date',

        ];

    }

    public function seekerExperienceCreate()
    {

        $id = Auth::guard('web')->user()->id;

        Experience::create([

            'user_id'           =>  $id,
            'company'           =>  $this->company,
            'business'          =>  $this->business,
            'position'          =>  $this->position,
            'department'        =>  $this->department,
            'skill'             =>  $this->skill,
            'duty'              =>  $this->duty,
            'location'          =>  $this->location,
            'startDate'         =>  $this->startDate,
            'endDate'           =>  $this->endDate,         

        ]);  
    

    }    
}
