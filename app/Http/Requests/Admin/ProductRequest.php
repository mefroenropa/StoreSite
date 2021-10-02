<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class ProductRequest extends Request
{
    public function rules()
    {
        if (methodField() == 'put') {
            return [
                'title' => "required|max:191",
                'body' => "required|max:1000",
                'attributes' => "required",
                'amount' => "required",
                'discount' => "required",
                'brand_id' => "required",
                'user_id' => "required",
                'cat_id' => "required"


            ];
        } else {
            return [
                'title' => "required|max:191",
                'body' => "required|max:1000",
                'attributes' => "required",
                'amount' => "required",
                'discount' => "required",
                'brand_id' => "required",
                'user_id' => "required",
                'cat_id' => "required"
            ];
        }
    }
}
