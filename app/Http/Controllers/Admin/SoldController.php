<?php

namespace App\Http\Controllers\Admin;

use App\Cart;
use System\Auth\Auth;
use App\Http\Controllers\Admin\AdminController;

class SoldController extends AdminController
{
    public function index(){
        $carts = Cart::where('isPaid', 1)->get();
        return view("admin.sold.index", compact('carts'));
    }

    public function status($status, $id){
        $inputs = [];
        $inputs['id'] = $id;
        $inputs['status'] = $status;
        Cart::update($inputs);
        return back();

    }
}