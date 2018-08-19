@extends('main')

@section('title','| Blog')

@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">

    <h1>Blog</h1>
    <hr>
    <br>
</div>
@foreach ($post as $posts)
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h2>{{ $posts->title}}</h2>
        <h5>Published: {{date('M j, Y', strtotime($posts->created_at))}}</h5>

        <p>{{substr($posts ->body, 0, 250)}} {{strlen($posts->body) > 250 ? "..": ""}}</p> 

        <a href="{{route('blog.single', $posts->id)}}" class="btn btn-primary">Read more</a>
        <hr>
    </div>
</div>
@endforeach


<div class="row">
    <div class="col-md-12">
            <br>
        <div class="text-center">
            {!! $post->links() !!}
        </div>
    </div>
</div>
</div>
@stop