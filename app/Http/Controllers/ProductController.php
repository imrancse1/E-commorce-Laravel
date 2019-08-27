<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;

use Illuminate\View\View;
use Image;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index(){
        $categories= Category::where('published',1)->get();
        $brands= Brand::where('published',1)->get();
        return view('admin.product.add-product',[
            'categories' =>$categories,
            'brands'=>$brands,
        ]);
    }

    protected function productInfoValidate($request){
        $this->validate($request,[
            'product_name'=>'required'
        ]);
    }

    protected function productImageUpload($request){
        $productImage=$request->file('product_image');
        $fileType=$productImage->getClientOriginalExtension();
        $imageName= $request->product_name.'.'.$fileType;
        $directory='product-images/';
        $imageUrl=$directory.$imageName;
       // $productImage->move($directory,$imageName);
        //Image::make($directory.$imageName);or
        Image::make($productImage)->resize(200,200)->save($imageUrl);
        return $imageUrl;

    }

    protected function saveProductBasicInfo($request,$imageUrl){

        $product = new Product();
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        $product->product_name=$request->product_name;
        $product->product_price=$request->product_price;
        $product->product_quantity=$request->product_quantity;
        $product->short_description=$request->short_description;
        $product->long_description=$request->long_description;
        $product->product_image=$imageUrl;
        $product->published=$request->published;
        $product->save();

    }

    public function saveProduct(Request $request){

       $this->productInfoValidate($request);
        $imageUrl= $this->productImageUpload($request);

        $this->saveProductBasicInfo($request,$imageUrl);

        return redirect('/product/add')->with('message','Product info save successfully');


    }

    public function manageProduct(){
//            $products = DB::table('products')
//            ->join('categories','products.category_id','=','categories.id')
//            ->join('brands','products.brand_id','=','brand_id')
//            ->select('products.*','categories.category_name','brands.brand_name')
//            ->get();
        $products =  DB::table('products')
                ->join('categories','categories.id','=','products.category_id')
                ->join('brands','brands.id','=','products.brand_id')
                ->select('products.*','categories.category_name','brands.brand_name')
                ->get();
       // return $products;
//        echo'<pre>';
//        print_r($products);
//        exit();


       return view('admin.product.manage-product',['products'=>$products]);
       //return view('admin.product.manage-product',compact('products'));
    }

    public function editProduct($id){
        $product=Product::find($id);
        $categories= Category::where('published',1)->get();
        $brands= Brand::where('published',1)->get();
        return view('admin.product.edit-product',[
            'product'=>$product,
            'categories' =>$categories,
            'brands'=>$brands,
        ]);
    }


    public function productBasicInfoUpdate($product,$request,$imageUrl=null){
        $product->category_id=$request->category_id;
        $product->brand_id=$request->brand_id;
        $product->product_name=$request->product_name;
        $product->product_price=$request->product_price;
        $product->product_quantity=$request->product_quantity;
        $product->short_description=$request->short_description;
        $product->long_description=$request->long_description;
        if ($imageUrl){
            $product->product_image=$imageUrl;
        }
        $product->published=$request->published;
        $product->save();
    }

    public function updateProduct(Request $request){
        $productImage= $request->file('product_image');
        $product = Product::find($request->product_id);

        if ($productImage){
            unlink($product->product_image);//problem ase ai line a
            $imageUrl= $this->productImageUpload($request);
            $this->productBasicInfoUpdate($product,$request,$imageUrl);
        }
        else{

            $this->productBasicInfoUpdate($product,$request);
        }
        return redirect('/product/manage')->with('message','Product Info Update');

    }

}
