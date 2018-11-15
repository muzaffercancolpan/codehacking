@extends('layouts.admin')


@section('content')

    <h1>Edit Post</h1>


    {!! Form::model($post,['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category_id','Category') !!}
        {!! Form::select('category_id', [''=>'Choose Category'] + $categories ,null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('photo_id','Photo') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body','Description') !!}
        {!! Form::textarea('body',null,['class'=>'form-control', 'rows'=>5 ]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

    {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]]) !!}


        <div class="form-group">
            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
        </div>

        {!! Form::close() !!}

    @include('include.form_error')

@endsection