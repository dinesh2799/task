<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create($id)
    {
        $category_id=Category::find($id);
        return view('products.create',compact('category_id'));
    }

    public function add_product(Request $request)
    {
        dd($request);
        $this->validate($request,['name'=>'required']);
        $category=new Product();
        $category->name=$request->name;
        $category->category_id=$request->category_id;
        $category->save();
        return redirect()->route('category.index');
    }
}
