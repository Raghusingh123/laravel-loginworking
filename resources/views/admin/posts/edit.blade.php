@extends('layouts.admin')


@section('content')
    <h1>Edit Posts</h1>
    <div class="row">
        {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}
        
        <div class="form-group">
            {!! Form::label('title','Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category','Category:') !!}
            {!! Form::select('category_id',$category, null,['class'=>'form-control']) !!}
            
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
                {!! Form::submit('Update Post', ['class'=>'btn btn-primary  col-sm-6']) !!}
        </div>
        {!! Form::close() !!}
    
{!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy',$post->id] , 'files'=>true]) !!}

<div class="form-group">
    {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6']) !!}
</div>
{!! Form::close() !!}

    </div>
    <div class="row">
        @include('includes.form_errors');
       
    </div>
@endsection

