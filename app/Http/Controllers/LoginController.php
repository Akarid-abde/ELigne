<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function login(Request $request)
   {
    /*dd($request->all());*/

   if(Auth::attempt([
   	'email' => $request->email,
   	'password' => $request->password
   ]))
   {
     $user = User::where('email',$request->email)->first();
     if($user->is_admin())
     {
       return redirect()->route('client');
     }
     return redirect()->route('home');
   }
    redirect()->back();
   }

}
