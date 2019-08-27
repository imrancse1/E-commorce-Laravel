<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;


class BrandController extends Controller
{
    public function index(){
       $demo ='<h1>hello</h1>';
        return view('admin.brand.add-brand',['demo'=>$demo]);
    }

    public function saveBrand(Request $request){

        $this->validate($request,[
           'brand_name'=>'required|regex:/^[\pL\s\-]+$/u|max:15|min:5',
           'brand_description' => 'required',
            'published'=>'required'

        ]);

        $brand=new Brand();
        $brand->brand_name        = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->published            =$request->published;
        $brand->save();

//
        return redirect('/brand/add')->with('message','brand info save sucessfully');




    }

    public function manageBrand(){
        $brands=Brand::all();
        // return $categories; json file dekar jonno ata ....ata lagbe na
        return view('admin.brand.manage-brand',['brands'=>$brands]);
    }

    public function unpublishedBrand($id){
        $brand=Brand::find($id);
        $brand->published=0;
        $brand ->save() ;
        return redirect('/brand/manage')->with('message','Brand info unpublished');
    }

    public function publishedBrand($id){
        $brand=Brand::find($id);
        $brand->published=1;
        $brand ->save() ;
        return redirect('/brand/manage')->with('publicshed message','Brand info published');
    }

    public function deleteBrand( $id){

        $brand=Brand::find($id);
        $brand->delete();
        return redirect('/brand/manage')->with('delete message','Brand info delete');

    }

    public function editBrand($id){

        $brand=Brand::find($id);
        return view('admin.brand.edit-brand',['brand'=>$brand]);

    }

    public function updateBrand(Request $request){
        // return $request->all();
        $brand= Brand::find($request->brand_id);

        $brand->brand_name        = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->published            =$request->published;
        $brand->save();
        return redirect('/brand/manage')->with('update message','Brand info update');
    }
}
