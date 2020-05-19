<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Auth;

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
    //protected $redirectTo = '/home';
    protected function redirectTo(){
        if(Auth::user()->role==1){
              return '/dashbord';
        }
        else if(Auth::user()->role==2){
            return 'dashbord/user';
        }
        else if(Auth::user()->role==3){
            return 'dashbord/member';
        }
        else{
            return '/login';
        }
       
    }

    public function logout(Request $request) {
      if(Auth::check() && Auth::user()->role==1)
      {
        Auth::logout();
       return redirect('/login'); 
      }
      else{
        Auth::logout();
      return redirect('/');
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
