<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function show(){
        return view('Front.register');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'address' => 'required',
        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password= bcrypt( $request->password);
        $user->address=$request->address;
        $user->save();


        return redirect()->back()->with('msg','User has been created successfully!');

    }





}
