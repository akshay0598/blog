@extends('main')
@section('title',' |Create New Post')
@section('content')
<div class="row">
<div class="col-md-8 col-md-offset-2">
<h1>Create New Post</h1>
<hr>
<form method="POST" action="/save">
@csrf
<div class="form-group">
<label id="title">Title</label>
<input type="text" class="form-control highlighter" name="title" id="title" value="{{old('title')}}">
@if($errors->has('title'))
<p class="text text-danger" >{{$errors->first('title')}}</p>  
@endif
</div>
<div class="form-group">
<label id="slug">Slug</label>
<input type="text" class="form-control highlighter" name="slug" id="slug" value="{{old('slug')}}">
@if($errors->has('slug'))
<p class="text text-danger" >{{$errors->first('slug')}}</p>  
@endif


<div class="form-group">
<label id="body">Body</label>
<textarea class="form-control " name="body" id="body" >{{old('body')}}</textarea>
@if($errors->has('body'))
<p class="text text-danger">{{$errors->first('body')}}</p>  
@endif

</div>
<input type="submit" class="btn btn-success btn-block" value="Create Post">

</div>
</div>



@endsection
