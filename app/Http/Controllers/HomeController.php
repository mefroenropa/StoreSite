<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Cart;
use App\Category;
use App\Comment;
use App\Gallery;
use App\Product;
use App\View;
use App\Wishlist;
use System\Auth\Auth;
use System\Request\Request;
use System\Session\Session;

class HomeController extends Controller
{

    public function index()
    {
        
        $categories = Category::orderBy('created_at', 'asc')->limit(0, 3)->get();
        $newProducts = Product::orderBy('created_at', 'desc')->limit(0, 8)->get();
        $mustPopular = Product::orderBy('sold', 'desc')->limit(0, 8)->get();
        return view('app.index', compact('newProducts', 'mustPopular', 'categories'));
    }

    public function products($englishName)
    {
        $category = Category::where('englishName', $englishName)->first();
        if (empty($_GET['brand'])) {
            $products = Product::where('cat_id', $category->id)->get();
        } else {
            $brand = Brand::where('name', $_GET['brand'])->first();
            $products = Product::where('brand_id', $brand->id)->where('cat_id', $category->id)->get();
        }
        $categories = Category::where('parent_id',  0)->get();
        $brands = Brand::all();
        $mustPopular = Product::orderBy('sold', 'desc')->limit(0, 4)->get();

        return view('app.store', compact('products', 'categories', 'brands', 'mustPopular'));
    }
    // SELECT * FROM `products` WHERE `title` LIKE "%لپ تاپ%" OR `body` LIKE "%لپ تاپ%" AND cat_id = 2
    public function search()
    {


        if (isset($_GET['search'])) {
            $search = '%' . $_GET['search'] . '%';
            if (!empty($_GET['search'])) {


                $products = Product::where('title', 'LIKE', $search)->whereOr('body', 'LIKE', $search)->get();
            } else {
                $id = $_GET['category'];
                $category = Category::find($id);
                $products = Product::where('cat_id', $id)->get();
                if ($id == 0) {
                    $products = Product::all();
                }
            }
        } else {
            return back();
        }
        if (!empty($_GET['brand'])) {
            $search = '%' . $_GET['search'] . '%';
            if (!empty($_GET['search'])) {

                $brand = Brand::where('name', $_GET['brand'])->first();
                $products = Product::where('brand_id', $brand->id)->where('title', 'LIKE', $search)->whereOr('body', 'LIKE', $search)->get();
            } else {
                $id = $_GET['category'];
                $brand = Brand::where('name', $_GET['brand'])->first();
                $category = Category::find($id);
                $products = Product::where('brand_id', $brand->id)->where('cat_id', $category->id)->get();
                if ($id == 0) {
                    $products = Product::where('brand_id', $brand->id)->get();
                }
            }
        }
        $categories = Category::where('parent_id',  0)->get();
        $brands = Brand::all();
        $mustPopular = Product::orderBy('sold', 'desc')->limit(0, 4)->get();
        return view('app.store', compact('products', 'categories', 'brands', 'mustPopular'));
    }
    public function viewPlus($id)
    {
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $view = View::where('ip_address', $ipAddress)->where('product_id', $id)->orderBy('created_at', 'desc')->get();
        if (empty($view)) {
            $inputs = [];
            $inputs['ip_address'] = $ipAddress;
            $inputs['product_id'] = $id;
            $inputs['view_count'] = 1;
            View::create($inputs);
        } else {
            $view[0]->view_count += 1;
            $view[0]->save();
        }
        return redirect('product/' . $id);
    }

    public function show($id)
    {
        $product = Product::find($id);
        $galleries = Gallery::where('product_id', $product->id)->get();
        $productAttributes = array_combine($product->attr['key'], $product->attr['value']);
        $relationProducts = Product::where('cat_id', $product->cat_id)->where('id', '!=', $id)->limit(0, 4)->get();

        return view('app.product', compact('product', 'galleries', 'productAttributes', 'relationProducts'));
    }

    public function wishlist()
    {
        if(Auth::user()->user_type == "guest"){
            error('Unauthorized', 'اپتدا وارد یا ثبت نام کنید');
            return back();
        }
      
        $wishlist = Auth::user()->wishlist()->get();

        return view('app.wishlist', compact('wishlist'));
    }

    public function wishlistAdd($id)
    {
        if(Auth::user()->user_type == "guest"){
            error('Unauthorized', 'اپتدا وارد یا ثبت نام کنید');
            return back();
        }
        $wishlist = Wishlist::where('product_id', $id)->where('user_id', Auth::user()->id)->get()[0];
        if ($wishlist == null) {

            $inputs = [];
            $inputs['product_id'] = $id;
            $inputs['user_id'] = Auth::user()->id;

            Wishlist::create($inputs);
        }


        return back();
    }

    public function wishlistDestory($id)
    {
        Wishlist::delete($id);



        return back();
    }




    public function commentStore($id)
    {
        if(Auth::user()->user_type == "guest"){
            error('Unauthorized', 'اپتدا وارد یا ثبت نام کنید');
            return back();
        }
        $request = new Request;
        $inputs = $request->all();
        $inputs['product_id'] = $id;
        $inputs['user_id'] = Auth::user()->id;
        $inputs['star_count'] = (int)$request->star_count;
        Comment::create($inputs);
        return back();
    }


    public function cartList()
    {
        if(Auth::user()->user_type == "guest"){
            error('Unauthorized', 'اپتدا وارد یا ثبت نام کنید');
            return back();
        }
        $carts = Auth::user()->carts()->get();
        $cartCount = count(Cart::where('user_id', Auth::user()->id)->where('isPaid', 0)->get());
        $sumAomuont = 0;
        $allCount = 0;
        foreach ($carts as $cartItem) {
            $sumAomuont += (int)$cartItem->product()->amount;
            $allCount += (int)$cartItem->count;
        }

        return view('app.cart-list', compact('carts', 'cartCount', 'sumAomuont', 'allCount'));
    }

    public function cartStore()
    {
        if(Auth::user()->user_type == "guest"){
            error('Unauthorized', 'اپتدا وارد یا ثبت نام کنید');
            return back();
        }
        $request = new Request;
        $cart = Cart::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)->get()[0];
        if ($cart == null) {
            $inputs = $request->all();
            $inputs['user_id'] = Auth::user()->id;
            Cart::create($inputs);
        }
        return back();
    }

    public function checkout()
    {
        $carts = Auth::user()->carts()->get();

        return view('app.cart-list', compact('carts'));
    }


    public function cartDestory($id)
    {
        Cart::delete($id);
        return back();
    }
}
