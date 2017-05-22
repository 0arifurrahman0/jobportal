<?php

namespace App\Http\Requests;

use App\Profile;

use App\User;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SeekerPreferred extends FormRequest
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
            
            'sePreferredCat'    => 'required',

        ];
    }

    public function messages()
    {

        return [

            'sePreferredCat.required' => 'Select at least one(01) Category!',

        ];

    }

    public function seekerPreferredUpdate()
    {

        $id = Auth::guard('web')->user()->id;

        Profile::where('id', $id)->update([

            'sePreferredCat'    =>  $this->sePreferredCat,
            'seInsideBd'        =>  $this->seInsideBd,
            'seOutsideBd'       =>  $this->seOutsideBd,

        ]);        

    }

}
