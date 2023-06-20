<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Auth;



class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return $users;
      }

      public function profile_update(Request $request){

        // $request->validate([
        //     'name' => 'nullable',
        //     'email' => 'nullable',
        //     'password' => 'nullable',

        // ]);
        $id=$request->id;
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return $user;    }

public function store(Request $request ){
    if(Auth::attempt(['email' =>$request->email, 'password'=>$request->password])){
        $user = Auth ::user();
        $token = $user->createToken('MyApp')->accessToken;
        $success = array('token' =>$token , 'name'=>$user->name, 'email'=>$user->email);
        return $success;

    }
    else{
        return response()-> json('Invalid Data');
    }

}
}
