@extends('layouts.admin')

@section('content')

    <h1>Create Post</h1>
    <div class="row">
    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category','Category:') !!}
            {!! Form::select('category_id',[''=>'Choose Options']+ $categories, 0,['class'=>'form-control']) !!}
            
        </div>
        <div class="form-group">
          
            {!! Form::label('photo_id','Select Photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control']) !!}
          
        </div>
        <div class="form-group">
            {!! Form::label('body','Discription:') !!}
            {!! Form::textarea('body',null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    </div>
    <div class="row">
        @include('includes.form_errors');
        
    </div>
@endsection
