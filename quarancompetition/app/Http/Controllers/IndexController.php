<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index()
    {
        return view('fontend.index');
      //  return view('home');
    }
    public function signin(){
        return view('fontend.login');
    } //

    public function signup(){

    	return view('fontend.signup');
    }
    public function registered(Request $request){
        
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed',
            'phone'=>'required|numeric',
            'city'=>'required'

             
           // 'postcode'=>'required',
          
      ]);

      $user = new User;
      $user->name=$request->input('name');
      $user->email=$request->input('email');
      $user->password=Hash::make($request->input('password'));
      $user->mobile=$request->input('phone');
      $user->city = $request->input('city');
      $user->role=2;
      $user->save();
      return redirect('/index');



    }
}
