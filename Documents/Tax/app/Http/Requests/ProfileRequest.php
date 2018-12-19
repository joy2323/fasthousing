<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
                'company_name'=> 'required|string',
                'company_address'=>'required|text',
                'email'=>'required|text',
                'website'=>'text',
                'phone_no'=>'string',
                'account_number'=>'required',
                'bank_name'=>'required|text',
                'feedback'=>'text',
                'images'=> 'required|mimes:jpg,png,gif,svg,psd,pdf|max:2048'
    
            ];
    }
}
