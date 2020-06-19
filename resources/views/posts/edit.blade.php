@extends('main')
@section('title',' |edit')
@section('content')
<div class="row">
<div class="col-md-8">
<form method="POST" action="{{route('posts.update',['post'=>$post])}}">
@csrf
@method('PUT')
<div class="form-group">
<label id="title">Title</label>
<input type="text" class="form-control" name="title" id="title" value="{{$post->title}}">
</div>
<div class="form-group">
<label id="slug">Slug</label>
<input type="text" class="form-control" name="slug" id="slug" value="{{$post->slug}}">
</div>
<div class="form-group">
<label id="body">Body</label>
<textarea class="form-control" name="body" id="body" style="height:200px">{{$post->body}}</textarea>
</div>
</div>
<div class="col-md-4">
<div class="well">
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
<a href="{{route('posts.show',['post'=>$post->id])}}" class="btn btn-danger btn-block">Cancel</a>
</div>
<div class="col-md-6">
<input type="submit" class="btn btn-success btn-block" value="Save Changes">
</div>
</div>
</div>
</form>
</div>


@endsection
