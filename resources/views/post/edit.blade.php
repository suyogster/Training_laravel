@extends('main')

@section('title', '| Edit Your Post')

@section('content')

<div class="row">
    {!! Form::model($post, ['route' => ['post.update', $post->id]]) !!}
    <div class="col-md-8">
        {{Form::label('title','Title: ')}}
        {{Form::text('title', null, ['class' => 'form-control']) }}

        {{Form::label('body','Body: ')}}
        {{Form::textarea('body',null, ['class' => 'form-control']) }}


    <h1>{{ $post->title }}</h1>


    <p class="lead">{{ $post -> body }}</p>
    </div>

 <div class="col-md-4">
    <div class="well">
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
                {!! Html::linkRoute('post.show','Cancel', array($post ->id), array('class' => 'btn btn-danger btn-block'))  !!}

            </div>
            <div class="col-sm-6">
                {!! Html::linkRoute('post.update','Save Changes', array($post ->id), array('class' => 'btn btn-success btn-block'))  !!}

            </div>
        </div>
    </div>
</div> <!-- end of the row -->

    <div class="col-md-12">
         <hr>

    </div>
</div>

<div class="row">
    <div class="col-md-12">

    </div>
</div>
@stop