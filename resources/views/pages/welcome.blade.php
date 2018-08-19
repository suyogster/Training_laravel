
@extends('main')

@section('title', '| About us')
@section('content')
<div class= "container">
    <div class = "row">
        <div class=" col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to my blog</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-8 ">
            <div class="post">
                <h3>Post Title</h3>
                <p> This is the blog post</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Read more</a>
            </div>
            <hr>

        <div class="post">
                <h3>Post Title</h3>
                <p> This is the blog post</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Read more</a>
            </div>
            <hr>

        <div class="post">
                <h3>Post Title</h3>
                <p> This is the blog post</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Read more</a>
        </div>
            <hr>

        </div>
        <div class="col-md-3 col-md-offset-1">
            <p> Side Bar Created!</p>

        </div>
</div>
@endsection