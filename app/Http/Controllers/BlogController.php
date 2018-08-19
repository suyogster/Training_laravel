<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    //

    public function getIndex(){

        $post = Post::paginate(2);

        return view('blog.index')->withPost($post);
    }
    
    public function getSingle($slug){

        //fetch from the DB on slug
            $post = Post::where('slug','=', $slug)->first();

        // return the view and pass in the post object
        return view('blog.single')->withPost($post);

    }
}
