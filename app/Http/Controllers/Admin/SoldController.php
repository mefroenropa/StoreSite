<?php

namespace App\Http\Controllers\Admin;

use App\Bought;
use System\Auth\Auth;
use App\Http\Controllers\Admin\AdminController;

class SoldController extends AdminController
{
    public function index(){
        $boughts = Bought::all();
        return view("admin.sold.index", compact('boughts'));
    }

    public function status($status, $id){
        $inputs = [];
        $inputs['id'] = $id;
        $inputs['status'] = $status;
        Bought::update($inputs);
        return back();

    }
}