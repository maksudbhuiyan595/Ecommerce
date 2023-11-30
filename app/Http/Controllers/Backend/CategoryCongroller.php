<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryCongroller extends Controller
{
    public function list()
    {   
        $categories=Category::all();
        return view('backend.pages.categories.list',compact("categories"));
    }
    public function create()
    {
        return view("backend.pages.categories.create");
    }
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            "name"  =>"required |unique:categories,name,string,id"
        ]);
        if($validate->fails())
        {
            
            notify()->error($validate->getMessageBag()->first());
            return redirect()->back();
        }

       Category::create([
        "name"  =>$request->name,
        "slug"  =>Str::lower($request->name),
       ]);
       
       notify()->success("successfully created category.");
       return redirect()->route("category.list");

    }
    public function delete($id)
    {
        Category::destroy($id);
        notify()->success("successfully deleted category.");
       return redirect()->back();

    }
}
