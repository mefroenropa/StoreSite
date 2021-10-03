<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class StoreRequest extends Request
{
    public function rules(){
        return [
            'firstCount' => "required",
            'product_id' => "exists:products,id|unique:store,product_id"
        ];
    }
}