<?php

namespace App\Http\Controllers;
use App\Post;
/**
* 
*/
class PagesController extends Controller
{
	public function getIndex(){
		$posts = Post::orderBy('updated_at','desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
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