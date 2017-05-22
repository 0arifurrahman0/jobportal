<?php

namespace App\Http\Requests;

use App\User;

use App\Professional;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SeekerProfessional extends FormRequest
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

            'certification'     => 'required',
            'institute'         => 'required',
            'startDate'         => 'required',
            'endDate'           => 'required',

        ];
    }

    public function messages()
    {

        return [

            'certification.required'    => 'Type your certification',
            'institute.required'        => 'Type your institute name',
            'startDate.required'        => 'Select your start date',
            'endDate.required'          => 'Select your end date',

        ];

    }

    public function seekerProfessionalCreate()
    {

        $id = Auth::guard('web')->user()->id;

        Professional::create([

            'user_id'           =>  $id,
            'certification'     =>  $this->certification,
            'institute'         =>  $this->institute,
            'location'          =>  $this->location,
            'startDate'         =>  $this->startDate,
            'endDate'           =>  $this->endDate,
          

        ]);

    }

}
