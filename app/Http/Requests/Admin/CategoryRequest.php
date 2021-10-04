<?php

namespace App\Http\Requests\Admin;

use System\Request\Request;

class CategoryRequest extends Request
{
    public function rules()
    {
        if (methodField() == 'put') {
            return [
                'name' => "required|max:191",
                'englishName' => "required|max:191",
                'image' => 'file|mimes:jpeg,jpg,png,gif',
                'parent_id' => "exists:categories,id"
            ];
        } else {
            return [
                'name' => "required|max:191",
                'englishName' => "required|max:191",
                'image' => 'required|file|mimes:jpeg,jpg,png,gif',
                'parent_id' => "exists:categories,id"
            ];
        }
    }
}
