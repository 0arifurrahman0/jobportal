<?php

namespace App\Http\Requests;

use App\User;

use App\Training;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SeekerTraining extends FormRequest
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

            'title'     => 'required',
            'institute' => 'required',
            'country'   => 'required',
            'year'      => 'required|not_in:0',

        ];
    }


    public function messages()
    {

        return [

            'title.required' => 'Type your training title',
            'institute.required' => 'Type your institute name',
            'country.required' => 'Type your country',
            'year.not_in' => 'Select your passing year',

        ];

    }

    public function seekerTrainingCreate()
    {

        $id = Auth::guard('web')->user()->id;

        Training::create([

            'user_id'     =>  $id,
            'title'       =>  $this->title,
            'topic'       =>  $this->topic,
            'institute'   =>  $this->institute,
            'location'    =>  $this->location,
            'country'     =>  $this->country,
            'year'        =>  $this->year,
            'duration'    =>  $this->duration,           

        ]);  
    

    }

}
