<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use System\Auth\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Services\ImageUpload;
use System\Request\Request;

class CategoryController extends AdminController
{
    public function index()
    {
        $categories = Category::all();
        return view("admin.category.index", compact('categories'));
    }

    public function archive()
    {
        $categories = Category::archive();
        dd($categories);
        return view("admin.category.archive", compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();

        return view("admin.category.create", compact('categories'));
    }


    public function store()
    {
        // $request = new CategoryRequest;
        // $inputs = $request->all();
        // $path = 'images/categories/' . date('Y/M/d');
        // $name = date('Y_m_d_H_i_s_') . rand(10, 99);
        // $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 480, 480);
        // $inputs['user_id'] = Auth::user()->id;
        $request = new Request();

        $inputs = $request->all();
        $path = 'images/gallery/' . date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand(10, 99);
        $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 640, 640);
        $inputs['user_id'] = Auth::user()->id;
        Category::create($inputs);
        return redirect('/admin/category');
    }




    public function edit($id)
    {
        $category = Category::find($id);
        $categories = Category::all();

        return view("admin.category.edit", compact('category', 'categories'));
    }


    public function update($id)
    {
        $request = new CategoryRequest;
        $inputs = $request->all();
        $file = $request->file('image');
        if (!empty($file['tmp_name'])) {
            $path = 'images/categories/' . date('Y/M/d');
            $name = date('Y_m_d_H_i_s_') . rand(10, 99);
            $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 640, 640);
        }
        $inputs['id'] = $id;
        $inputs['user_id'] = Auth::user()->id;
        Category::update($inputs);
        return redirect('/admin/category');
    }


    public function destroy($id)
    {
        Category::delete($id);
        return back();
    }
}
