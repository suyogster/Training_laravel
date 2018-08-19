<?php

namespace App\Http\Controllers;

class PagesController extends Controller{


    #process variable data or params, talk to the model
    # receive from the model
    #compile or process data from the model if need
    #pass the data to the correct view


    public function getIndex(){

        return view('pages.welcome');

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

