<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    //
  public function getIndex(){
    // $posts = Post::orderby('created_at','desc')->limit(4)->get();
    return view('auth.login');
 }

 public function getContact(){

     return view('pages.contact');
 }

 public function getAbout(){
     return view('pages.about');
 }
}
