<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Question;
use Session;
use App\User;
use App\Assignment;
class MangeQuestionController extends Controller
{
    public function index(){
        $user =Auth::user();
        $question = Question::all();
        
    	return view('question.question',compact('user','question'));

    }

    public function add($id=''){
    	if($id==''){
    	$user = Auth::user();
    	$question = '';
    	return view('question.add',compact('user','question'));	
    	}
    	else{
    	  $user = Auth::user();
    	  $question  = Question::all();

    	  return view('question.add',compact('user','question'));	
    	  
    	}
    	
    }
   public function save(Request $request){

    	$id =$request->input('id');

      if($id=='')
      {
       	$this->validate($request,[
            'question' => 'required',
            'answer'=>'required'

           
      ]);
        $data = $request->all();


        

        $question = new Question($data);
        $question->added_by = 1;
        $question->save();
        Session::flash('success','successfully saved.');
        return redirect('admin/question/add');

}
      
       else{
             $data = $request->all();
             $q = Question::find($id);
             $q->question=$data['question'];
             $q->answer=$data['answer'];
             $q->save();
             Session::flash('success','successfully saved.');
        	return redirect('admin/question/add/'.$id);
   
       }
   }
   public function delete($id){
      $question = Question::find($id);
      $question->delete();
        return redirect('admin/question');
       
   }
    public function assign(){
        $user = Auth::user();
        $questions = Question::all();
        $member = User::getAllmembers();
        $assigndetails = Assignment::assigndetails();
        
        
    	return view('question.asign',compact('user','questions','member','assigndetails'));
    }

    public function assigingto(Request $request){
    		$this->validate($request,[
            'question' => 'required',
            'members'=>'required'

           
      ]);
    		$data=$request->all();
    		$q =new Assignment;
    		$q->q_id=$data['question'];
    		$q->assignto=$data['members'];
    		$q->added_by = 1;
    		$q->save();
    		
    		return redirect('admin/question/assign');

    }
}
