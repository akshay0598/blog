@extends('main')
@section('title',' |All Posts')
@section('content')
<div class="row">
<div class="col-md-10">
<h1>All Posts</h1>
</div>
<div class="col-md-2">
<a href="{{route('posts.create')}}" class="btn btn-primary" style="margin-top:20px">Create New Post</a>
</div>
</div>
<hr>
<div class="row">
<div class="col-md-12">
<hr>
</div>
</div>
<div class="row">
<div class="col-md-12">
<table class="table">
<thead>
<th>#</th>
<th>Title</th>
<th>Body</th>
<th>Created At</th>
<th></th>
</thead>
@foreach($posts as $post)
<tbody>
<th>{{$post->id}}</th>
<td>{{$post->title}}</td>
<td>{{substr($post->body,0,50)}} {{strlen($post->body) >50 ?"....":""}}</td>
<td>{{$post->created_at}}</td>
<td><a href="{{route('posts.show',$post->id)}}" class="btn btn-default">View</a><a href="{{route('posts.edit',$post->id)}}" class="btn btn-default" style="margin-left:4px">Edit</a></td>
</tbody>

@endforeach
</table>
<div class="text-center">
{!! $posts->links(); !!}
</div>

</div>
</div>

@endsection
