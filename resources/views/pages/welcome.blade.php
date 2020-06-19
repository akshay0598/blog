@extends('main')
@section('title',' |Homepage')
@section('content')
     <div class="row">
     <div class="col-md-12">
     <div class="jumbotron">
  <h1>Welcome to my Blog!!</h1>
  <p  class="lead">Thank you so much for visiting .This is a test website built with Laravel.Please read my latest post!</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Latest Post</a></p>
     </div>
     </div>
     </div>
     <div class="row">
     <div class="col-md-8">
     @foreach($posts as $post)
     <div class="post">
     <h2>{{$post->title}}</h2>
     <p>{{substr($post->body,0,200)}}{{strlen($post->body) >200 ?"....":""}}</p>
     <a href="{{route('blog.single',['slug'=>$post->slug])}}" class="btn btn-primary">Read More</a>
     </div>
     <hr>
     @endforeach
     </div>
      
     <div class="col-md-3 col-md-offset-1" >
     <h2>SideBar</h2>
     </div>
   @endsection
