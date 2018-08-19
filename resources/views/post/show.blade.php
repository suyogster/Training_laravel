@extends('main')

@section('title', '| View Post')


@section('content')


    <div class="row">
        <div class="col-md-8">
        <h1>{{ $post->title }}</h1>
        <p class="lead">{{ $post -> body }}</p>
        </div>

     <div class="col-md-4">
        <div class="well">

            <dl class="dl-horizontal">
                <dt>Url Slug:</dt>
                <dd><a href="{{ route('blog.single', $post->slug) }}"> {{route('blog.single', $post->slug)}}</a></dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Created at:</dt>
                <dd>time: {{ date('M j, Y h:ia', strtotime($post->created_at)) }} </dd>
            </dl>

            <dl class="dl-horizontal">
                <dt>Last Updated:</dt>
                <dd>time: {{ date('M j Y h:ia', strtotime($post->updated_at)) }}</dd>
            </dl>

            <hr>

            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('post.edit','Edit', array($post ->id), array('class' => 'btn btn-primary btn-block'))  !!}

                </div>
                <div class="col-sm-6">
                    {!! Form::open(['route' => ['post.destroy', $post->id], 'method' => 'DELETE' ]) !!}
                    {!! Form::submit('Delete', ['class'=> 'btn btn-danger btn-block']) !!}
                    {!! Form::close() !!}

                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <br>
                    {{Html::linkRoute('post.index', 'See all the Posts', [], ['class' => 'btn btn-lg btn-block'])}}
                </div>
            </div>
        </div>
    </div> <!-- end of the row -->

@endsection
