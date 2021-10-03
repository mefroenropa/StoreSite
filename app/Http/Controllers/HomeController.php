<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Gallery;
use App\Product;
use App\View;
use System\Auth\Auth;
use System\Database\DBBuilder\DBBuilder;
use System\Request\Request;

class HomeController extends Controller
{

    public function index()
    {
        $newProducts = Product::orderBy('created_at', 'desc')->limit(0, 8)->get();
        $mustPopular = Product::orderBy('sold', 'desc')->limit(0, 8)->get();
        return view('app.index', compact('newProducts', 'mustPopular'));
    }

    public function viewPlus($id){
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $view = View::where('ip_address', $ipAddress)->where('product_id', $id)->orderBy('created_at', 'desc')->get();
        if(empty($view)){
            $inputs = [];
            $inputs['ip_address'] = $ipAddress;
            $inputs['product_id'] = $id;
            $inputs['view_count'] = 1;
            View::create($inputs);

        }else{
            $view[0]->view_count += 1;
            $view[0]->save();
        }
        return redirect('product/'.$id);
    }

    public function show($id){
        $product = Product::find($id);
        $galleries = Gallery::where('product_id', $product->id)->get();
        $productAttributes = array_combine($product->attr['key'], $product->attr['value']);

        return view('app.product', compact('product', 'galleries', 'productAttributes'));

    }


    public function commentStore($id){
        $request = new Request;
        $inputs = $request->all();
        $inputs['product_id'] = $id;
        $inputs['user_id'] = Auth::user()->id;
        $inputs['star_count'] = (int)$request->star_count;
        Comment::create($inputs);
        return back();
    }
}
