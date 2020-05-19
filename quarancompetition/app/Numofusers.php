<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Numofusers extends Model
{
    //
    protected $table = 'numofmembers';
    protected $fillable = ['added_by'];
    public $timestamp =false;

    public static function adduserid($data){

        $member = new Numofusers;
        $member->added_by=$data['added_by'];
        $member->save();
    }
    public static function countmember($id){
    	$mem = Numofusers::select('*')
    	                  ->where('added_by',$id)
    	                  ->get();

      return count($mem);

    }
}
