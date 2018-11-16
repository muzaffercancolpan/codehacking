@extends('layouts.admin')


@section('content')


    <h1>Categories</h1>

    <div class="col-sm-6">



        {!! Form::model($myCategory,['method'=>'PATCH', 'action'=>['AdminCategoriesController@update',$myCategory->id]]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-sm-3']) !!}
        </div>

        {!! Form::close() !!}




        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $myCategory->id]]) !!}


            <div class="form-group">
                {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-3']) !!}
            </div>

            {!! Form::close() !!}

    </div>


    <div class="col-sm-6">
        <table class="table">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Created Date</th>
            </tr>
            </thead>
            <tbody>
            @if($categories)
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
                        <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'No data'}}</td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>


    </div>


@endsection