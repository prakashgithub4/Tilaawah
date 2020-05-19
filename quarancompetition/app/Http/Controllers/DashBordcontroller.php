<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
class DashBordcontroller extends Controller
{
    //
    public function index(){

          $user = Auth::user();
          $total_users = User::getAllUser();
    	return view("dashbord.index",compact('user','total_users'));
    }
}
