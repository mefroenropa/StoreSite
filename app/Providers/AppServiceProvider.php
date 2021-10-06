<?php

namespace App\Providers;

use App\Cart;
use App\Category;
use System\Auth\Auth;
use System\View\Composer;

class AppServiceProvider extends Provider
{
    public function boot()
    {
        Composer::view("app.layouts.master",  function () {
            $carts = Cart::where('user_id', Auth::user()->id)->where('isPaid', 0)->get();
            $cartCount = count(Cart::where('user_id', Auth::user()->id)->where('isPaid', 0)->get());
            $sumAmount = 0;
            $cart_id = '';
            foreach ($carts as $cartItem) {
                $cart_id .= $cartItem->id . ",";
                $sumAmount += (int)$cartItem->product()->amount;
            }
            $wishlistCount = count(Auth::user()->wishlist()->get());
            $categoriesMaster = Category::all();
            $user = Auth::user();

            return [
                "carts"              => $carts,
                "cartCount"          => $cartCount,
                "cart_id"            => $cart_id,
                "sumAmount"          => $sumAmount,
                "wishlistCount"      => $wishlistCount,
                "categoriesMaster"   => $categoriesMaster,
                "user"               => $user,


            ];
        });

        Composer::view("auth.profile.layouts.master",  function () {
            $user = Auth::user();

            return [
                "user"               => $user,
            ];
        });
    }
}
