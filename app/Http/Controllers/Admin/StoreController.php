<?php

namespace App\Http\Controllers\Admin;

use System\Auth\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Requests\Admin\StoreRequest;
use App\Product;
use App\Store;

class StoreController extends AdminController
{
    public function index()
    {
        $stores = Store::all();
        return view("admin.store.index", compact('stores'));
    }

 

    public function create()
    {
        $products = Product::all();
        return view("admin.store.create", compact('products'));
    }

    public function store()
    {
        $request = new StoreRequest;
        $inputs = $request->all();
        $inputs['user_id'] = Auth::user()->id;
        Store::create($inputs);
        return redirect('/admin/store');
    }

    public function edit($id)
    {
        $store = Store::find($id);
        $products = Product::all();
        return view("admin.store.edit", compact('store', 'products'));
    }

    public function update($id)
    {
        $request = new StoreRequest;
        $inputs = $request->all();
        $inputs['id'] = $id;
        $inputs['user_id'] = Auth::user()->id;
        Store::update($inputs);
        return redirect('/admin/store');
    }

    public function destroy($id)
    {
        Store::delete($id);
        return back();
    }
}
