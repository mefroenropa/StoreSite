<?php

namespace App\Http\Controllers;

use App\Bought;
use App\Brand;
use App\Cart;
use App\Category;
use App\Comment;
use App\Gallery;
use App\Http\Requests\App\CheckoutRequest;
use App\Newslitter;
use App\Product;
use App\View;
use App\Wishlist;
use System\Auth\Auth;
use System\Config\Config;
use System\Request\Request;
use System\Session\Session;

class HomeController extends Controller
{

    public function index()
    {

        $categories = Category::orderBy('created_at', 'desc')->limit(0, 3)->get();
        $newProducts = Product::orderBy('created_at', 'desc')->limit(0, 8)->get();
        $mustPopular = Product::orderBy('sold', 'desc')->limit(0, 8)->get();
        $jitneyProducts = Product::orderBy('amount', 'asc')->limit(0, 8)->get();
        return view('app.index', compact('newProducts', 'mustPopular', 'categories', 'jitneyProducts'));
    }

    public function newslitterRegister()
    {

        $request = new Request;
        $inputs = $request->all();
        Newslitter::create($inputs);
        return back();
    }

    public function products($englishName)
    {
        $category = Category::where('englishName', $englishName)->get()[0];
        if (empty($_GET['brand'])) {
            $products = Product::where('cat_id', $category->id)->get();
        } else {
            $brand = Brand::where('name', $_GET['brand'])->get()[0];
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

                $brand = Brand::where('name', $_GET['brand'])->get()[0];
                $products = Product::where('brand_id', $brand->id)->where('title', 'LIKE', $search)->whereOr('body', 'LIKE', $search)->get();
            } else {
                $id = $_GET['category'];
                $brand = Brand::where('name', $_GET['brand'])->get()[0];
                if ($id == 0) {
                    $products = Product::where('brand_id', $brand->id)->get();
                } else {

                    $category = Category::find($id);
                    $products = Product::where('brand_id', $brand->id)->where('cat_id', $category->id)->get();
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
        if (Auth::user()->user_type == "guest") {
            flash('error', 'اپتدا وارد یا ثبت نام کنید');
            return back();
        }

        $wishlist = Auth::user()->wishlist()->get();

        return view('app.wishlist', compact('wishlist'));
    }

    public function wishlistAdd($id)
    {
        if (Auth::user()->user_type == "guest") {
            flash('error', 'اپتدا وارد یا ثبت نام کنید');
            return back();
        }
        $wishlist = Wishlist::where('product_id', $id)->where('user_id', Auth::user()->id)->get()[0];
        if ($wishlist == null) {

            $inputs = [];
            $inputs['product_id'] = $id;
            $inputs['user_id'] = Auth::user()->id;

            Wishlist::create($inputs);
        }

        flash('success', '!با موفقیت در لیست علاقه مندی ها ذخیره شد');
        return back();
    }

    public function wishlistDestory($id)
    {
        flash('success', '!با موفقیت حذف شد');

        Wishlist::delete($id);



        return back();
    }




    public function commentStore($id)
    {
        if (Auth::user()->user_type == "guest") {
            flash('error', 'اپتدا وارد یا ثبت نام کنید');
            return back();
        }
        $request = new Request;
        $inputs = $request->all();
        $inputs['product_id'] = $id;
        $inputs['user_id'] = Auth::user()->id;
        $inputs['star_count'] = (int)$request->star_count;
        Comment::create($inputs);
        flash('success', '!با موفقیت ثبت شد');

        return back();
    }


    public function cartList()
    {
        if (Auth::user()->user_type == "guest") {
            flash('error', 'اپتدا وارد یا ثبت نام کنید');
            return back();
        }
        $carts = Cart::where('user_id', Auth::user()->id)->where('isPaid', 0)->get();
        $cartCount = count(Cart::where('user_id', Auth::user()->id)->where('isPaid', 0)->get());
        $sumAmount = 0;
        $allCount = 0;
        $cart_id = '';
        foreach ($carts as $cartItem) {
            $sumAmount += (int)$cartItem->price;
            $allCount += (int)$cartItem->count;
            $cart_id .= $cartItem->id . ",";
        }

        return view('app.cart-list', compact('carts', 'cartCount', 'sumAmount', 'allCount', 'cart_id'));
    }

    public function cartStore()
    {
        if (Auth::user()->user_type == "guest") {
            flash('error', 'اپتدا وارد یا ثبت نام کنید');
            return back();
        }
        $request = new Request;
        $cart = Cart::where('product_id', $request->product_id)->where('user_id', Auth::user()->id)->where('isPaid', 0)->first();
        if ($cart == null) {
            $inputs = $request->all();
            $inputs['user_id'] = Auth::user()->id;
            $product = Product::find($inputs['product_id']);
            $productPrice = (int)$product->amount * (int)$inputs['count'];
            $inputs['price'] = $productPrice . "";

            Cart::create($inputs);
            flash('success', '!با موفقیت به سبد خرید شما اضافه شد');
        }
        flash('error', '!این محصول در سبد خرید شما موجود است');


        return back();
    }

    public function checkout()
    {
        $request = new CheckoutRequest;
        $inputs = $request->all();

        $MerchantID     = "962e8030-142-4a6b-7544-a687c7b6553c";
        $Amount         = $inputs['sumAmount'];
        $Description     = "تراکنش زرین پال";
        $Email             = "";
        $Mobile         = "";
        $CallbackURL     = "http://example.com/verify/". $inputs['cart_id'] . "/" . $inputs['sumAmount'];
        $ZarinGate         = false;
        $SandBox         = false;

        $zp     = new zarinpal();
        $result = $zp->request($MerchantID, $Amount, $Description, $Email, $Mobile, $CallbackURL, $SandBox, $ZarinGate);

        if (isset($result["Status"]) && $result["Status"] == 100) {
            // Success and redirect to pay
            $zp->redirect($result["StartPay"]);
        } else {
            // error
            echo "خطا در ایجاد تراکنش";
            echo "<br />کد خطا : " . $result["Status"];
            echo "<br />تفسیر و علت خطا : " . $result["Message"];
        }
    }

    public function verify($cart_id, $amount)
    {
        $MerchantID     = "962e8030-142-4a6b-7544-a687c7b6553c";
        $Amount         = $amount;
        $ZarinGate         = false;
        $SandBox         = false;

        $zp     = new zarinpal();
        $result = $zp->verify($MerchantID, $Amount, $SandBox, $ZarinGate);

        if (isset($result["Status"]) && $result["Status"] == 100) {
            // Success
            echo "تراکنش با موفقیت انجام شد";
            echo "<br />مبلغ : " . $result["Amount"];
            echo "<br />کد پیگیری : " . $result["RefID"];
            echo "<br />Authority : " . $result["Authority"];
            $inputs = [];
            $inputs['RefID'] = $result["RefID"];
            $inputs['Authority'] = $result["Authority"];
            $inputs['cart_id'] = $cart_id;
            $inputs['price'] = $result["Amount"];
            $inputs['user_id'] = Auth::user()->id;
            
            $cart__id = explode(',', $cart_id);
            foreach($cart__id as $cartId){
                $cart = Cart::find($cartId);
                $cart->isPaid = '1';
                $cart->save();
                $product = Product::find($cart->product_id);
                $product->store()->count - $cart->count;
            }
            Bought::create($inputs);
            flash('success', '!تراکنش با موفقیت انجام شد');
            return redirect('/profile/bought/show');

        } else {
            // error
            echo "پرداخت ناموفق";
            echo "<br />کد خطا : " . $result["Status"];
            echo "<br />تفسیر و علت خطا : " . $result["Message"];
        }
    }


    public function cartDestory($id)
    {
        Cart::delete($id);
        flash('success', '!با موفقیت حذف شد');

        return back();
    }
}
