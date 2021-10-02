<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class DiscountRequest extends Request
{
    public function rules(){
       
            return [
                'value' => "required|max:191",
                'type' => "required|max:191",
                'timeToDate' => "required",

            ];
        
     
    }
}