<?php 

namespace App\Http\Requests\Auth;


use System\Request\Request;

class ProfileRequest extends Request
{
    protected function rules()
    {
        
        return [
            'email' => "required|max:64|email",
            'first_name' => "required",
            'last_name' => "required",
            'avatar' => "file|mimes:jpeg,jpg,png|max:2048",
        ];
    }
}