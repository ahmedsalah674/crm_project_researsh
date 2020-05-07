<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class ViewusersController extends Controller
{
    public function show($id)
    {if(\Auth::user()->role==2 && $id != \Auth::user()->id)
      return redirect()->route('user.data',\Auth::user()->id);
      $user= User::find($id);
      if(!$user)
         return redirect()->route('home')->with('error',"This Profile Not Found");
      elseif(\Auth::user()->role==1 && $user->role ==0)
        return redirect()->route('home')->with('error',"You Cann't Open This Profile"); 
      else
      { 
          return view('profile.showprofile',compact('user'));
      }
    }

    public function create()
    {
      if(\Auth::user()->role!=0)
        return redirect()->route('home')->with('error',"You Cann't Open This Page");
      return view('admin.create');
    }

    public function store(Request $request)
    {
      $this->validate($request,[
      'name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|min:8',
      'password-confirm' =>'required|min:8|same:password',
      'role' => 'required|integer|max:2|min:0',
      'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      if(!$request->image){
        $image = user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'role' => $request->role,
          ]);}
          else{
          $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/users'), $imageName);
            $image = user::create([
              'name' => $request->name,
              'email' => $request->email,
              'password' => Hash::make($request->password),
              'role' => $request->role,
              'image' => $imageName,
            ]);}
            // if($request->role != 0){
            //   $user=user::where('email',$request->email)->get();
            //   $image = rate::create([
            //     'user_id' => $user[0]->id,
            //   ]);
            // }
          return redirect()->route('home')->with('message','User Added Successfully');
    }
}
