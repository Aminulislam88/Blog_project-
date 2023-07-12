<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function page(Request $request){
        return view('pages.post-list');

    }
    function page1(Request $request){
        return view('pages.full-post');

    }

    function post_list(){
       return Post::with('user')->get();

   }

}
