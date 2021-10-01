<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use System\Auth\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\ProductRequest;
use App\Product;

class ProductController extends AdminController
{
    public function index(){
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::all();
        return view("admin.product.index", compact('categories', 'brands', 'products'));
    }
    
    public function archive(){
        $categories = Category::archive();
        dd($categories);
        return view("admin.product.archive", compact('categories'));
    }

    public function create(){
        $categories = Category::all();
        $brands = Brand::all();
        
        return view("admin.product.create", compact('categories', 'brands'));
    }

    
    public function store(){
        $request = new ProductRequest;
        dd('hi');
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        Product::create($inputs);
        return redirect('product');

    }

    

    
    public function edit($id){
        $category = Category::find($id);
        $categories = Category::all();

        return view("admin.product.edit", compact('category', 'categories'));
    }

    
    public function update($id){
        $request = new CategoryRequest;
        $inputs = $request->all();
        $inputs['id'] = $id;
        $inputs['user_id'] = Auth::user()->id;
        Category::update($inputs);
        return redirect('product');
    }

    
    public function destroy($id){
        Category::delete($id);
        return back();
    }

}