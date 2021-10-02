<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Discount;
use System\Auth\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\Admin\DiscountRequest;
use App\Product;

class DiscountController extends AdminController
{
    public function index(){
        $discounts = Discount::all();
        return view("admin.discount.index", compact('discounts'));
    }
    
    public function archive(){
        $categories = Category::archive();
        dd($categories);
        return view("admin.category.archive", compact('categories'));
    }

    public function create(){
        $products = Product::all();
        
        return view("admin.discount.create", compact('products'));
    }

    
    public function store(){
        $request = new DiscountRequest;
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        $inputs['code'] = "MFD-".rand(1000000, 90000000);
        Discount::create($inputs);
        return redirect('discount');

    }

  

    
    public function destroy($id){
        Discount::delete($id);
        return back();
    }

}