<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {   

        if(request()->isMethod('POST'))
        {
            return [
                'name' => 'required',
                'email' => 'required|email|unique:students',
                'roll_no' => 'required|numeric|unique:students'
            ];
        }
        elseif(request()->isMethod('PUT')) 
        {
            $id = request()->segment(2);
            return [
                'name' => 'required',
                'email' => 'required|email|unique:students,email,'.$id,
                'roll_no' => 'required|numeric|unique:students,roll_no,'.$id
            ];
        }    
    }

    public function messages()
    {
        return [
            'roll_no.required' => 'Roll number is required',
            'roll_no.unique' => 'Roll numner has already been taken',
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'email.unique' => 'Email address has already been taken'
        ];
    }
}
