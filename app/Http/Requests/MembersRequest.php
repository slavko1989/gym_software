<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Member;

class MembersRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email|unique:members,email',
            'country'=>'required',
            'city'=>'required',
            'address'=>'required',
            'profile'=>'required|mimes:jpeg,png,jpg,gif',
            'phone'=>'required',
            'date_begin'=>'required',
            'date_ex'=>'required',
            'cat_id'=>'required',
            'status'=>'required',
            'payment'=>'required'
        ];
    }
    
}
