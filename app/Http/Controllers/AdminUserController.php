<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\support\fascades\Auth;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        return view('admin.login');
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);

        //when credentials does not match
        // $credentials=$request->only('email','password');
        // if( ! Auth::gaurd('admin')->attempt($credentials)){
        //     return redirect()->back()->withErrors([
        //         'message'=> 'wrong credentials please try again'
        //     ]);
        // }
        // session()->flash('msg','you have logged in');
        // return redirect('/');


        $product = new AdminUser();
        $product->email = $request->email;
        $product->password = $request->password;
        $product->save();
    }
}
