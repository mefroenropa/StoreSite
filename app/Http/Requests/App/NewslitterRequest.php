<?php 

namespace App\Http\Requests\App;


use System\Request\Request;

class NewslitterRequest extends Request
{
    protected function rules()
    {
        return [
            'email' => "required|max:64|email|unique:users,email",
        ];
    }
}