<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function list()
    {   
        $roles=Role::all();
        return view('backend.pages.roles.list',compact("roles"));
    }
    public function create()
    {
        return view("backend.pages.roles.create");
    }
    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            "name"  =>"required |unique:roles,name,string,id"
        ]);
        if($validate->fails())
        {
            
            notify()->error($validate->getMessageBag()->first());
            return redirect()->back();
        }

       Role::create([
        "name"  =>$request->name,
       ]);
       
       notify()->success("successfully created Role.");
       return redirect()->route("role.list");

    }
    public function assignForm($id)
    {
        $role=Role::find($id);
        return view("backend.pages.roles.assign",compact("role"));
    }
}
