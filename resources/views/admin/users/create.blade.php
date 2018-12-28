@extends('layouts.admin')

@section('content')
    <h1>Create a user</h1>
    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}



		<div class="form-group">
			{!! Form::label('name','Name:') !!}
			{!! Form::text('name',null, ['class'=>'form-control']) !!}
    	
		</div>
        <div class="form-group">
            {!! Form::label('email','Email:') !!}
            {!! Form::email('email',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id','Role Id:') !!}
            {!! Form::select('role_id',[''=>'Choose Options']+ $roles,null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('status','Status:') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not Active'),0,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password','Password:') !!}
            {!! Form::password('password',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id','Select Photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control']) !!}
        </div>
		<!-- <div class="form-group">
			{!! Form::file('file', ['class'=>'form-control']) !!}
		</div> -->

		<!-- <input type="text" name="title" placeholder="Enter Title"> -->
    	<!-- <input type="submit" name="submit"> -->
    	<div class="form-group">
    		{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    	</div>
	{!! Form::close() !!}

<!-- print errors-->
	@include('includes.form_errors');

@stop