<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;

class BlogController extends Controller
{
    public function getSingles($slug){
        $post = Post::where('slug', '=', $slug)->first();

    	return view('blog.single')->withPost($post);
    }
}
