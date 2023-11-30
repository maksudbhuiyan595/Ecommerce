<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Image;

class ProductController extends Controller
{
    public function list()
    {   
        $products=Product::all();
        return view('backend.pages.products.list',compact("products"));
    }
    public function create()
    {   
        $categories= Category::all();
        return view("backend.pages.products.create",compact("categories"));
    }
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            "name"          =>"required |unique:products,name,string,id",
            "category_id"   => "required",
            "quantity"      =>"required",
            "price"         =>"required",
            "discount"      =>"required",
            "discount_type" =>"required",
            "description"   =>"required",
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
           
        ]);
        if($validate->fails())
        {
            
            notify()->error($validate->getMessageBag()->first());
            return redirect()->back();
        }

        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();
       
        $destinationPathThumbnail = public_path('/thumbnail');
        $img = Image::make($image->path());
        $img->resize(300, 300, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPathThumbnail.'/'.$imageName);
     
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $imageName);

       Product::create([
        "name"          =>$request->name,
        "category_id"   =>$request->category_id,
        "description"   =>$request->description,
        "price"         =>$request->price,
        "quantity"      =>$request->quantity,
        "discount"      =>$request->discount,
        "discount_type" =>$request->discount_type,
        "image"         =>$imageName,
        
       ]);
       
       notify()->success("successfully created Product.");
       return redirect()->route('product.list');

    }
    public function delete($id)
    {
        Product::destroy($id);
        notify()->success("successfully deleted Product.");
       return redirect()->back();

    }
}
