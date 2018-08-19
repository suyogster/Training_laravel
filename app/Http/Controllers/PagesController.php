<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller{


    #process variable data or params, talk to the model
    # receive from the model
    #compile or process data from the model if need
    #pass the data to the correct view


    public function getIndex(){

        $post = Post::orderby('created_at', 'desc')->limit(3)->get();
        return view('pages.welcome')->withPost($post);

    }

    public function getAbout(){

        return view('pages.about');
    }

    public function getContact(){
        return view('pages.contact');

    }

 /*   public function postContact(){

        //to submit the contact

    }

 */
}

