@extends('layouts.admin')


@section('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" class="css">

@endsection


@section('content')

    <h1>Upload Media</h1>


    {!! Form::open(['method'=>'POST', 'action'=>'AdminMediasController@store','class'=>'dropzone']) !!}


    {!! Form::close() !!}


@endsection


@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>

@endsection