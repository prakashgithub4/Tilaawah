<?php

namespace App\Http\Controllers\member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Question;

class MyquestionController extends Controller
{
    //
    
    public function index($id=''){
        
        $user = Auth::user();
        $id =  $user->id;
        $offset = 0;

        $myquestion  = Question::myquestions($id,$offset);
        $total_records = Question::totalrecords($id);

    	
    	return view('members.myqustion',compact('user','myquestion','total_records'));
    }


    public function countQuestion($id){
      
      

       $user = Auth::user();
        $u_id =  $user->id;
        $offset = $id;
        $total_records = Question::totalrecords($u_id);
       
        if($offset<$total_records)
        {
             $myquestion  = Question::myquestions($u_id,$offset);
            // print_r($myquestion[0]['question']); exit;
            echo "<div id='question' class='form-group'><label for='exampleInputPassword1'>Your Question </label>
                    <textarea class='form-control'>".$myquestion[0]['question']."</textarea>
                    </div>";

        }
        else {
            echo "0";
        }
       
        


    }
}
