<?php

namespace App\Http\Requests\App;

use System\Request\Request;

class CheckoutRequest extends Request
{
    public function rules()
    {
      
            return [
                'sumAmount' => "required",
            ];
    
    }
}
