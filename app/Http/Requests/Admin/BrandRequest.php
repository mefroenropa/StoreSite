<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class BrandRequest extends Request
{
    public function rules(){
        if(methodField() == 'put'){
            return [
                'name' => "required|max:191",
                'image' => 'required|file|mimes:jpeg,jpg,png,gif',
            ];
        }else{
            return [
                'name' => "required|max:191",
                'image' => 'required|file|mimes:jpeg,jpg,png,gif',
            ];
        }
     
    }
}