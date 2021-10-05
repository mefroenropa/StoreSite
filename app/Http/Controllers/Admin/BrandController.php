<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use System\Auth\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\BrandRequest;
use App\Http\Services\ImageUpload;
use System\Request\Request;

class BrandController extends AdminController
{
    public function index(){
        $brands = Brand::all();
        return view("admin.brand.index", compact('brands'));
    }
    

    public function create(){
        
        
        return view("admin.brand.create");
    }

    
    public function store(){
        $request = new BrandRequest;
        $inputs = $request->all();
        $path = 'images/brandIcon/' . date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand(10, 99);
        $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 360, 360);
        $inputs['user_id'] = Auth::user()->id;
        Brand::create($inputs);
        return redirect('/admin/brand');

    }

    

    
    public function edit($id){
        $brand = Brand::find($id);

        return view("admin.brand.edit", compact('brand'));
    }

    
    public function update($id){
        $request = new BrandRequest;
        $inputs = $request->all();
        $path = 'images/brandIcon/' . date('Y/M/d');
        $name = date('Y_m_d_H_i_s_') . rand(10, 99);
        $inputs['image'] = ImageUpload::UploadAndFitImage($request->file('image'), $path, $name, 360, 360);
        $inputs['user_id'] = Auth::user()->id;
        $inputs['id'] = $id;
        Brand::update($inputs);
        return redirect('/admin/brand');
    }

    
    public function destroy($id){
        Brand::delete($id);
        return back();
    }

}