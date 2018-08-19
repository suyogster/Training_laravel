
@extends('main')

@section('title', '| About us')
@section('content')
<div class= "container">
    <div class = "row">
        <div class=" col-md-12">
            <br>
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

            @foreach ($post as $posts)
                <div class="post">        
                <h3>{{ $posts->title}}</h3>
                <p> {{ substr($posts-> body, 0, 300)}} {{strlen($posts->body) > 300 ? "..." : "" }}</p>
                <a href="{{ url('blog/'. $posts->slug) }}" class="btn btn-primary">Read more</a>
                 <hr>
            </div>   
            @endforeach
        
            

    

        </div>
        <div class="col-md-3 col-md-offset-1">
            <p> Side Bar Created!</p>

        </div>
        <hr>
</div>
@endsection