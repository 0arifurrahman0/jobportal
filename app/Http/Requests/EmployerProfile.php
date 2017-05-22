<?php

namespace App\Http\Requests;

use App\Emprofile;

use App\Employer;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class EmployerProfile extends FormRequest
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

            'name'    => 'required',
            'type'    => 'required',
            'address'    => 'required',
            'country'    => 'required',
            'city'    => 'required',
            'person'    => 'required',
            'designation'    => 'required',

        ];

    }

    public function messages()
    {

        return [

            'name.required' => 'Need company name',
            'type.required' => 'Need company type',
            'address.required' => 'Need company address',
            'country.required' => 'Need geographical country name',
            'city.required' => 'Need city',
            'person.required' => 'Name contact person name',
            'designation.required' => 'Need contact person designation',

        ];

    }


    public function employerProfileUpdate()
    {

        $id = Auth::guard('employer')->user()->id;


        Emprofile::where('employer_id', $id)->update([

            'name'        =>  $this->name,
            'type'       =>  $this->type,
            'details'       =>  $this->details,
            'address'   =>  $this->address,
            'country'      =>  $this->country,
            'city'    =>  $this->city,
            'area'     =>  $this->area,
            'person' =>  $this->person,
            'designation'  =>  $this->designation,
            'mobile'  =>  $this->mobile,
            'phone'=>  $this->phone,
            'email2'      =>  $this->email2,
            'url'   =>  $this->url,

        ]);


    }    
}
