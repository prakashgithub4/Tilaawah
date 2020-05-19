<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
  protected $table="assigns";
  protected $fillable=['q_id', 'assignto', 'status', 'added_by'];
  public $timestamp;

  public static function assigndetails(){
  	$assign = Assignment::select("*")
       ->join('questions','questions.id','=','assigns.q_id')
       ->join('users','users.id','=','assigns.assignto')
       ->get();
      
return $assign->toArray();
}
  
}
