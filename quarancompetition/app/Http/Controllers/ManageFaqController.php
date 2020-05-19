<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faq;
class ManageFaqController extends Controller
{
    public function index(){
    	
    	$faq = Faq::enablefaq();
    	return view('fontend.faq',compact('faq'));
    }
}
