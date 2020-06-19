@extends('main')
@section('title','|View Post')
@section('content')
<div class="row">
<div class="col-md-8">
<h1>{{$post->title}}</h1>
<p class="lead">{{$post->body}}</p>
</div>
<div class="col-md-4">
<div class="well">
<dl class="dl-horizontal">
<dt>Slug</dt>
<dd><a href="{{route('blog.single',['slug'=>$post->slug])}}">{{route('blog.single',['slug'=>$post->slug])}}</a></dd>
</dl>
<dl class="dl-horizontal">
<dt>Created At:</dt>
<dd>{{$post->created_at}}</dd>
</dl>
<dl class="dl-horizontal">
<dt>Last Updated:</dt>
<dd>{{$post->updated_at}}</dd>
</dl>
<hr>
<div class="row">
<div class="col-md-6">
<a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-primary btn-block">Edit</a>
</div>
<div class="col-md-6">
<form method="POST" action="{{route('posts.destroy',['post'=>$post->id])}}">
@csrf
@method('DELETE')
<input type="submit" value="Delete" class="btn btn-danger btn-block">
</form>
</div>
</div>
<div class="row">
<div class="col-md-12">
<a href="{{route('posts.index')}}" class="btn btn-default btn-h1-spacing btn-block" style="margin-top:4px">See all posts</a>
</div></div>
</div>
</div>
</div>
@endsection
