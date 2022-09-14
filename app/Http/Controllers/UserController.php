<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }
    public function details($id){
        $orders=Order::with('user','product')->find($id);
        return view('admin.users.details',compact('orders'));
        // return redirect()->route('users.details');
    }

    public function profile(){
        $user=Auth::user();
        return view('admin.profile',compact('user'));
    }
    public function profile_update(Request $request){
        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'password' => 'nullable',

        ]);
        $id=Auth::user()->id;
        $user=User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        return redirect()->route('users.index');
    }

}
