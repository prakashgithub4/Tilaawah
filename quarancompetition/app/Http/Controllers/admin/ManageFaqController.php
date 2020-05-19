<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Faq;
use Session;
class ManageFaqController extends Controller
{
    public function index($id=''){

    	if($id!=''){
           $faq  = Faq::find($id);
           $user = Auth::user();
    	   return view('faq.index',compact('user','faq'));
          
    	}
    	else{
    		$faq = '';
    		$user = Auth::user();
    		return view('faq.index',compact('user','faq'));
    	}
    	
    	
    }
    public function save(Request $request){
    	$id =$request->input('id');
       if($id=='')
       {
       	$this->validate($request,[
            'title' => 'required',
            'description'=>'required'

           
      ]);
        $data = $request->all();


        $faq = Faq::savefaq($data);
        if($faq){
        	Session::flash('success','successfully saved.');
        	return redirect('admin/faq/add');
        }
       }
       else{
             $data = $request->all();

             $faq = Faq::find($id);
            // print_r($faq); exit;
             $faq->title=$data['title'];
             $faq->description=$data['description'];
             $faq->save();
             Session::flash('success','successfully saved.');
        	return redirect('admin/faq/add/'.$id);
   
       }
        

    }
    public function faq(){
    	$faq =Faq::all();
    	
    	$user = Auth::user();

    	return view('faq.faq',compact('user','faq'));
    }
   public function delete($id){
   	  $faq = Faq::find($id);
   	  $faq->delete();
   	  return redirect('admin/faq');
   }

   public function changeStatus($id,$status){
      $flag =($status=='enable')?'disable':'enable';
      $faq=Faq::find($id);
      $faq->status=$flag;
      $faq->save();
      return redirect('admin/faq');

   }
}
