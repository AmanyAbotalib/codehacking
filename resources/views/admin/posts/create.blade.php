@extends('layouts.admin')

@section('content')
    <h1>Create Posts</h1>


    <div class="row">



        {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id', [''=>'Choose Category'] + $categories , null, ['class'=>'form-control']) !!}
            {{-- 0 after array is for default select if user doesn't select any option--}}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Title:') !!}
            {!! Form::file('photo_id',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('Description', 'Body:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>

    <div class="row">
        @include('includes.form_error')   {{-- to display required field based on PostsCreateRequest--}}
    </div>
    @stop