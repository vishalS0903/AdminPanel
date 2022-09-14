<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function show(){
        return view('front.login');
    }

    public function store(Request $request ){
        $rules =[
            'email' => 'required|email',
            'password' => 'required'
        ];

        $request->validate($rules);
        $data = request(['email','password']);
        if (!auth()->attempt($data)){
            return back()->with(['msg','Wrong details please try again']);
        }

        return redirect()->route('profile.index')->with('msg','You have been login successfully');

    }
    public function logout(){
        auth()->logout();
       return redirect()->route('front.index')->with('msg','You have been logged out successfully');

    }





}
