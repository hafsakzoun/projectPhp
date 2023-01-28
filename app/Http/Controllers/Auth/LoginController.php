<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected function authenticated()
    {
        if(Auth::user()->role_as == '1') //1 = Admin Login
        {
         // return view('admin');
            return redirect('dashboard')->with('status','Welcome to your dashboard');
        }
        elseif(Auth::user()->role_as == '0') // Normal or Default User Login
        {
           // return "this is useer";
            return redirect('dashboard')->with('status','Logged in successfully');
            //return view('user');
        }
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
