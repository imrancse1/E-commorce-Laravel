<?php

namespace App\Http\Controllers;

use App\Product;
//use Melihovv\ShoppingCart\Cart;

use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart( Request $request){
           $product= Product::find($request->id);

         Cart::add([
               'id'=>$request->id,
               'name'=>$request->product_name,
               'price'=>$request->product_price,
               'qty' =>$request->qty,



        ]);



        return redirect('/cart/show');
    }

    public function showCart(){
        return view('front-end.cart. ');
    }
}
