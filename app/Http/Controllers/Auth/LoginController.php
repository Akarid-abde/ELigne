<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\cn;
class LoginController extends Controller
{
   
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /*protected $redirectTo = RouteServiceProvider::HOME;*/
    
    public function login(Request $request)
   {
    /*dd($request->all());*/
    $cns = cn::all();
   if(Auth::attempt([
    'email' => $request->email,
    'password' => $request->password
   ]))
   {
     $user = User::where('email',$request->email)->first();
     if($user->is_admin())
     {
       /*return redirect()->route('admin');*/
       return view('user.admin',['cns' => $cns]);
     }elseif(!$user->is_admin()){
     return view('user.client',['user' => $user]);
     }
   }
    session()->flash('delete'," il faut s''inscrire !!");
     return redirect()->back();
   }



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
