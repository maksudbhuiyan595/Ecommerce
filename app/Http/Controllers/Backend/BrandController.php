<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    public function list()
    {
        $brands=Brand::all();
        return view('backend.pages.brands.list',compact('brands'));
    }

    public function create(){

        $category=Category::all();
        return view('backend.pages.brands.create',compact('category'));
    }

    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            "brand_name"  =>"required |unique:brands,brand_name,string,id",
            "category_id"  =>"required"
        ]);
        if($validate->fails())
        {
            
            notify()->error($validate->getMessageBag()->first());
            return redirect()->back();
        }

       Brand::create([
        "brand_name"  =>$request->brand_name,
        "category_id"  =>$request->category_id,
       
        
       ]);
       
       notify()->success("successfully created brand.");
       return redirect()->route("brand.list");

    }
}
