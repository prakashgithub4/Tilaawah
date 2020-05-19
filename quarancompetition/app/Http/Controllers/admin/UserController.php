<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        $users =User::getAllUser();

    	return view('user.user',compact('user','users'));
    }
    public function userstatus($id,$status){
       User::userStatus($id,$status);
       return redirect('user/');
    }
    public function contactDetails($id){
    	
    	$users = User::contactDetails($id);
       $user = Auth::user();
    	//print_r($user); exit;
    	return view('user.contact',compact('user','users'));
    }
   
}
