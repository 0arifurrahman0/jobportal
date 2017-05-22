<?php

namespace App\Http\Requests;

use App\User;

use App\Academic;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SeekerAcademic extends FormRequest
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
            
            'eduLevel'    => 'required|not_in:0',
            'examTitle'   => 'required',
            'majorGroup'  => 'required',
            'instName'    => 'required',
            'resultType'  => 'required|not_in:0',
            'passYear'    => 'required|not_in:0',

        ];
    }

    public function messages()
    {

        return [

            'eduLevel.not_in' => 'Select your education level',
            'examTitle.required' => 'Type your exam title',
            'majorGroup.required' => 'Type your major subject',
            'instName.required' => 'Type your institute name',
            'resultType.not_in' => 'Select your result type',
            'passYear.not_in' => 'Type your passing year',

        ];

    }

    public function seekerAcademicCreate()
    {

        $id = Auth::guard('web')->user()->id;

        Academic::create([

            'user_id'           =>  $id,
            'eduLevel'          =>  $this->eduLevel,
            'examTitle'         =>  $this->examTitle,
            'majorGroup'        =>  $this->majorGroup,
            'instName'          =>  $this->instName,
            'resultType'        =>  $this->resultType,
            'marks'             =>  $this->marks,
            'cgpa'              =>  $this->cgpa,
            'scale'             =>  $this->scale,
            'passYear'          =>  $this->passYear,
            'duration'          =>  $this->duration,
            'achievment'        =>  $this->achievment,           

        ]);  
    

    }


}
