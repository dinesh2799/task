<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::all();
        return view('category.index',compact('categories'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('category.create',compact('categories'));
    }

    public function add_category(Request $request)
    {
//        dd($request);
        $this->validate($request,['name'=>'required']);
        $category=new Category();
        $category->name=$request->name;
        if($request->category_id == Null)
        {
            $category->category_id=0;
        }
        else
        {
            $category->category_id=$request->category_id;
        }
        $category->save();
        return redirect()->route('category.index');
    }
}
