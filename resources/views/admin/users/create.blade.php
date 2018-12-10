@extends('layouts.admin')

@section('content')
    <h1>Create Users</h1>


    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store','file' => true]) !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}

         </div>

         <div class="form-group">

             {!! Form::label('is_active', 'Status:') !!}
             {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active') , 0, ['class'=>'form-control']) !!}
         {{-- 0 after array is for default select if user doesn't select any option--}}
         </div>

         <div class="form-group">

             {!! Form::label('role_id', 'Role:') !!}
             {!! Form::select('role_id', [''=>'Choose Option'] + $roles,null, ['class'=>'form-control']) !!}  {{-- null is default value--}}

         </div>

         <div class="form-group">

             {!! Form::label('file', 'Image:') !!}
             {!! Form::file('file', null, ['class'=>'form-control']) !!}

         </div>


          <div class="form-group">

              {!! Form::label('password', 'Password:') !!}
              {!! Form::password('password', null, ['class'=>'form-control']) !!}
          </div>

         <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
         </div>

    {!! Form::close() !!}

@include('includes.form_error')   {{-- to display required field based on UsersRequest--}}

@stop