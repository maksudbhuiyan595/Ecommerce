<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home()
    {
        return view("backend.layouts.app");
    }


    public function loginform(){

        return view('backend.pages.users.login');
    }

    public function login(Request $request){

$validate=Validator::make($request->all(),[

        'email'=>'required',
        'password'=>'required'
]);

if($validate->fails()){

    notify()->error($validate->getMessageBag()->first());
    return redirect()->back();
}

$credentials = $request->only('email', 'password');

    if(auth()->attempt($credentials)){

        return redirect()->route('home');
    }
    }

}
