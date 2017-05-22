<?php

namespace App\Http\Requests;

use App\User;

use App\LanguageProficiency;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SeekerLanguage extends FormRequest
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

            'language'     => 'required',
            'writing'      => 'required|not_in:0',
            'reading'      => 'required|not_in:0',
            'speaking'     => 'required|not_in:0',

        ];
    }

    public function messages()
    {

        return [

            'language.required'  => 'Write language name',
            'writing.not_in'   => 'Select your writing speed',
            'reading.not_in'   => 'Select your reading speed',
            'speaking.not_in'  => 'Select your speaking of speed',

        ];

    }

    public function seekerLanguageCreate()
    {

        $id = Auth::guard('web')->user()->id;

        LanguageProficiency::create([

            'user_id'     =>  $id,
            'language'    =>  $this->language,
            'writing'     =>  $this->writing,
            'reading'     =>  $this->reading,
            'speaking'    =>  $this->speaking,

        ]);  
    

    }   

}
