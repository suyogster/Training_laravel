@extends('main')

@section('title', '| All post')

@section('content')
<br>
    <div class="row">
        <div class="col-md-8">

            <h1> All posts</h1>

        </div>

        <div class="col-md-3">

            <a href="{{ route('post.create') }}" class="btn btn-lg btn-block btn-primary">Create new Post</a>

        </div>
        <hr>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table">
                
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th></th>
                </thead>

                <tbody>
                    @foreach ($post as $posts)
                    <tr>
                    <th>{{ $posts -> id}}</th>    
                    <td>{{ $posts -> title}}</td>
                    <td>{{ substr($posts -> body, 0 , 50)}}{{ strlen($posts->body)>50 ? "..." : " "}}</td>
                    <td>{{ $posts -> created_at}}</td>
                    <td> <a href="{{route('post.show',$posts->id)}}" class="btn btn-dark btn-sm">View</a>  <a href="{{ route('post.edit', $posts->id)}}" class="btn btn-danger btn-sm">Edit</a></td>
                    </tr>    
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
    @endsection