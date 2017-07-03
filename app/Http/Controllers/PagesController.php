<?php

namespace App\Http\Controllers;

/**
* 
*/
class PagesController extends Controller
{
	public function getIndex(){
		 return view('pages.welcome');
	}	
	
	public function getAbout(){
		$first='Gurpreet';
		$last='Singh';

		$full=$first." ".$last;
		return view('pages.about' , compact('full'));
	}

	public function getContact(){
		return view('pages.contact');
	}	
}


?>