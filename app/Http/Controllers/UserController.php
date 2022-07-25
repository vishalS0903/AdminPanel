<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

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
}
