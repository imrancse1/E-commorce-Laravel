<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.add-category');
    }

    public function manageCategory(){
        $categories=Category::all();
       // return $categories; json file dekar jonno ata ....ata lagbe na
        return view('admin.category.manage-category',['categories'=>$categories]);
    }

    public function saveCategory(Request $request){
        $category=new Category();
        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->published            =$request->published;
        $category->save();

//     or   Category::create($request->all());

        //query Bilder using
//        DB::table('categories')->insert([
//            'category_name'   => $request->category_name,
//         'category_description' => $request->category_description,
//          'published'            =>$request->published
//        ]);
        return redirect('/category/add')->with('message','category info save sucessfully');

    }

    public function unpublishedCategory($id){
        $category=Category::find($id);
        $category->published=0;
        $category ->save() ;
        return redirect('/category/manage')->with('message','category info unpublished');
    }

    public function publishedCategory($id){
        $category=Category::find($id);
        $category->published=1;
        $category ->save() ;
        return redirect('/category/manage')->with('publicshed message','category info published');
    }

    public function editCategory($id){


        $category=Category::find($id);
        return view('admin.category.edit-category',['category'=>$category]);

    }

    public function updateCategory(Request $request){
       // return $request->all();
        $category= Category::find($request->category_id);

        $category->category_name        = $request->category_name;
        $category->category_description = $request->category_description;
        $category->published            =$request->published;
        $category->save();
        return redirect('/category/manage')->with('update message','category info update');
    }

    public function deleteCategory($id){
        $category=Category::find($id);
        $category->delete();
        return redirect('/category/manage')->with('delete message','category info delete');

    }


}
