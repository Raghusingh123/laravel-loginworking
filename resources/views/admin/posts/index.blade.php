@extends('layouts.admin')


@section('content')

  @if(Session::has('deleted_post'))
    <p class="bg-danger">{{session('deleted_post')}}</p>
  @endif
    <h1>Posts</h1>
    <table class="table">
        <thead>
            <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>User</th>
            <th>Category</th>            
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            @if($posts)
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img src="{{ $post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}  " height=50 /></td>
                    <td><a href="{{route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a> </td>
                    <td>{{$post->category ? $post->category->name : 'Uncategerized'}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{str_limit($post->body, 15)}}</td>
                    <td>{{$post->created_at->diffForhumans()}}</td>
                    <td>{{$post->updated_at->diffForhumans()}}</td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection

