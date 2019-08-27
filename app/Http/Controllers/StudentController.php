<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $name = "Prince Mahamud";
        $age = "23";
       // return view ('home',compact('name','age'));
        //or
//        return view('home')
//            ->with('name',$name)
//            ->with('age',$age);
        //or
        return view('home',[
            'name'=>$name,
            'age'=>$age
        ]);
    }

    public function add(){
        return 'hello about';
    }
}
