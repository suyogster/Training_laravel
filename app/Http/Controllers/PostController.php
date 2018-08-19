<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //create a variable and store all the blog posts in it from the database

        $post = Post::orderBy('id', 'asc')->paginate(2);
        return view('post.index')->withPost($post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $post = Post::find($id);
        //validate slug and other data
            if($request->input('slug') == $post->slug){
                $this->validate($request, array(
                'title' => 'required|max:255',
                'body' => 'required',
                ));
            }else{
        //Firstly we need to validate the data
        $this->validate($request, array(
            'title' => 'required|max:255',
            'slug' => 'required|alpha_dash|min:5|max:255,unique:posts,slug',
            'body' => 'required',
        ));
            }
        //store to the database

        $post = new Post;

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;

        $post->save();

        Session::flash('success', 'The blog post was successfully save!');
        return redirect()->route('post.show', $post->id);
        //redirect to the next page
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the data base and save it as a variable
            $post = Post::find($id);

        //return the view and pass the variable that we have previously created

        return view('post.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validate the data
            $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required',
        ));

        //Save the data to the database
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        //set flash data with success message

        Session::flash('success', 'This post was successfully saved.');

        //redirect with flash data to post.show
        return redirect()->route('post.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $post = Post::find($id);

        $post->delete();

        Session::flash('success','Your Post was successfully deleted');
        return redirect()->route('post.index');
    }
}
