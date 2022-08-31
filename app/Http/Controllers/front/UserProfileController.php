<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index(){
        $id = auth ()->user()->id;
        $user = User::find($id);
        $orders = Order::where('user_id',$id)->get();
        return view('front.profile.index',compact(['user','orders']));
    }

public function show($id){
 $order = Order::find($id);
 return view('front.profile.details',compact('order'));
}
public function edit($id){
    $user= User::find($id);
    return view('front.profile.editprofile',compact('user'));
}
public function update(Request $request ,$id){
    $user =User::find($id);
    $user-> name =$request->name;
    $user-> email =$request->email;
    $user-> password = bcrypt($request->password);
    $user-> address =$request->address;
    $user->save();
    return redirect()->route('profile.index');
}


public function details($id){
        $order = Order::find($id);
                // dd($order);

        return view('front.profile.profiledetails',compact('order'));

}


}
