<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Role_permission;
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
        $role=Role::with('permissions')->find($id);
        // $rolePermissions=Role_permission::where($role->permissions->pluck('permission_id')->toArray());
        $rolePermissions=$role->permissions->pluck('permission_id')->toArray(); // arter convert data 
        $permissions=Permission::all();
        return view("backend.pages.roles.assign",compact("role","permissions","rolePermissions"));
    }
    public function assignPermission(Request $request,$role_id)
    {
        // dd($request->all());
        $validate=Validator::make($request->all(),[
            // "permisssion" =>"required",
        ]);
        if($validate->fails())
        {
            notify()->error($validate->getMessageBag()->first());
            return redirect()->back();
        }

        Role_permission::where('role_id',$role_id)->delete(); // role and permission update 
        foreach($request->permission as $permission)
        {
            Role_permission::create([
                "permission_id" =>$permission,
                "role_id" =>$role_id,
            ]);
        }
        notify()->success("successfully created.");
        return redirect()->back();

    }
}
