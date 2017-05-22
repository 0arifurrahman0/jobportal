<?php

namespace App\Http\Requests;

use App\User;

use App\Reference;

use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SeekerReference extends FormRequest
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
            'designation'    => 'required',
            'organization'    => 'required',
            'relation'    => 'required|not_in:0',

        ];
    }

    public function messages()
    {

        return [

            'name.required'         => 'Reference name required',
            'designation.required'  => 'His/her designation required',
            'organization.required' => 'His/her organization name required',
            'relation.not_in'       => 'Select relation',

        ];

    }

    public function seekerRelationCreate()
    {

        $id = Auth::guard('web')->user()->id;

        Reference::create([

            'user_id'     =>  $id,
            'name'        =>  $this->name,
            'designation' =>  $this->designation,
            'mobile'      =>  $this->mobile,
            'email'       =>  $this->email,
            'relation'    =>  $this->relation,
            'organization'    =>  $this->organization,
            'phoneOffice' =>  $this->phoneOffice,
            'address'     =>  $this->address,

        ]);

    }

}
