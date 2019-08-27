<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
       // $categories= Category::where('published',1)->get();
        $newProducts= Product::where('published',1)
                    ->orderBy('id','DESC')
                    ->take(12)
                   // ->skip(2)
                    ->get();
        //return $categories;
        return view('front-end.home.home',[
            //'categories'=>$categories,
            'newProducts'=>$newProducts
        ]);
    }

    public function categoryProduct($id){
       $categoryProducts= Product::where('category_id',$id)
           ->where('published',1)

           ->get();


        return view('front-end.category.category-content',[
           'categoryProducts'=>$categoryProducts,
        ]);
     }

     public function productDetails($id){
        $product = Product::find($id);
        return view('front-end.product.product-details',['product'=>$product]);
     }

     public function mailUs(){
        return view('front-end.mail-us.mail-us');
     }


}

