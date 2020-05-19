<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'questions';
    protected $fillable =[ 'question', 'answer', 'access_by', 'added_by'];
    public $timestamp;

    public static function myquestions($user_id,$off){

    	$question = Question::select("*")
    	     ->join('assigns','assigns.q_id','=','questions.id')
             ->join('users','users.id','=','assigns.assignto')
             ->where('assigns.assignto','=',$user_id)
                ->offset($off)
                ->limit(1)
                
             ->get();


           return $question->toArray();

    }
    public static function totalrecords($user_id){

    	$question = Question::select("*")
    	     ->join('assigns','assigns.q_id','=','questions.id')
             ->join('users','users.id','=','assigns.assignto')
             ->where('assigns.assignto','=',$user_id)
             ->get();
             return $question->count();
    }
}
