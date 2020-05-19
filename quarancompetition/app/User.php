<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','category', 'postcode',' place_of_study','city_of_study' ,'address1', 'address2', 'address3', 'birthday', 'city', 'mobile', 'skypeid', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getAllUser(){
        $user=User::select('*')
                    ->where('role','!=',1)
                    ->get();
        return $user->toArray();

    } 

    public static function getAllmembers(){
        $user=User::select('*')
                    ->where('role','=',3)
                    ->get();
        return $user->toArray();

    } 
    public static function userStatus($id,$status){
        $user =User::find($id);
       
        if($status=='pending')
        {
          $user->status = 'approve';
        }
        else if($status =='approve')
        {

            $user->status= "decline";
        }
        else if($status == 'decline')
        {
            $user->status = 'pending';
        }
        $user->save();

    }
    public static function contactDetails($id){
        
        $user = User::find($id);
        return $user->toArray();


    }
    public static function addmember($data){
      
      $user = new User;
      $user->name=$data['name'];
      $user->email=$data['email'];
      $user->password=Hash::make($data['password']);
      $user->category=$data['category'];
      $user->postcode=$data['postcode'];
      $user->place_of_study=$data['placeofstudy'];
      $user->city_of_study=$data['cityofstudy'];
      $user->address1=$data['address1'];
      $user->address2=$data['address2'];
      $user->address3=$data['address3'];
      $user->birthday=date('y-m-d',strtotime($data['bday']));
      $user->city=$data['city'];
      $user->mobile=$data['mobile'];
      $user->skypeid=$data['skype'];
      $user->role='3';
      $user->save();
      return 1;
     
      //$user->password Hash::make(


    }
}
