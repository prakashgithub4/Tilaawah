<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //
   protected $table = "faq";
   protected $fillable=['id', 'title', 'description', 'status', 'added_by'];
   public $timestamp = true;


   public static function savefaq($data){

   	$faq = new Faq($data);
   	$faq->added_by=1;
   	$faq->save();
   	return true;
   }
   public static function enablefaq(){
   $faq=Faq::where('status','enable')->get();
   return $faq->toArray();
  }
}
  
