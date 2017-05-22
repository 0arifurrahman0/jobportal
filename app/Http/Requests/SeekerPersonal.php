<?php

namespace App\Http\Requests;

use App\Profile;

use App\User;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Auth;



class SeekerPersonal extends FormRequest
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

            'seName'    => 'required',
            'seBirthDate'    => 'required',
            'seGender'    => 'required',
            'seMStatus'    => 'required|not_in:0',
            'seNationality'    => 'required',
            'sePresentAdd'    => 'required',
            'seMobile'    => 'required',

        ];
    }

    public function messages()
    {

        return [

            'seName.required' => 'Just type your Full Name',
            'seBirthDate.required' => 'Just select your Birth Date',
            'seGender.required' => 'Just select your Gender',
            'seMStatus.not_in' => 'Select your Marital Status',
            'seNationality.required' => 'Just type your Nationality',
            'sePresentAdd.required' => 'Just type your Current Address',
            'seMobile.required' => 'Just type your Current Mobile Number',

        ];

    }


    public function seekerPersonalUpdate()
    {

        $id = Auth::guard('web')->user()->id;

        Profile::where('id', $id)->update([

            'seName'        =>  $this->seName,
            'seFName'       =>  $this->seFName,
            'seMName'       =>  $this->seMName,
            'seBirthDate'   =>  $this->seBirthDate,
            'seGender'      =>  $this->seGender,
            'seReligion'    =>  $this->seReligion,
            'seMStatus'     =>  $this->seMStatus,
            'seNationality' =>  $this->seNationality,
            'seNationalId'  =>  $this->seNationalId,
            'sePresentAdd'  =>  $this->sePresentAdd,
            'sePermanentAdd'=>  $this->sePermanentAdd,
            'seMobile'      =>  $this->seMobile,
            'seMobileAlt'   =>  $this->seMobileAlt,
            'seEmailAlt'    =>  $this->seEmailAlt,

        ]);


    }

}
