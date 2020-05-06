<?php

namespace App\Http\Controllers;

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
}
