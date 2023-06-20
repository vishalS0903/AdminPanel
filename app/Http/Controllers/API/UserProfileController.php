<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserProfileController extends Controller
{
    public function update(Request $request ,$id){
        $user =User::find($id);
        $user-> name =$request->name;
        $user-> email =$request->email;
        $user-> password = bcrypt($request->password);
        $user-> address =$request->address;
        $user->save();
        return $user;    }
}
