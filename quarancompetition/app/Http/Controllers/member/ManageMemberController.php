<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Session;
use Auth;
use App\User;
use App\Numofusers;

class ManageMemberController extends Controller
{
    public function member(){
         $user = Auth::user();
         $numofmem= Numofusers::countmember($user->id);

    	return View('members.member',compact('user','numofmem'));
    }
    public function store(Request $request)
    {
       //$data = $request->all();
       

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string',

            'placeofstudy'=>'required',
            'cityofstudy'=>'required',
            'bday'=>'required',
           // 'postcode'=>'required',
            'city'=>'required',
            'mobile'=>'required',
            'skype'=>'required'
      ]);
      //  return redirect('')
        $data= $request->all();
       

        $isSave = User::addmember($data);
        if($isSave){
        	  $addedby['added_by'] = Auth::user()->id;
             Numofusers::adduserid($addedby);
        	Session::flash('success','successfully saved.');
        }
        else{
        	Session::flash('error','error');
        }
        return redirect('member/add');
      
    }
}
