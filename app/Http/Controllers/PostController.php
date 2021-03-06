<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::orderBy('id','desc')->paginate(5);
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate(['title'=>'required','body'=>'required','slug'=>'required|alpha_dash|min:5']);

       $post=new Post;
       $post->title=$request->title;
       $post->slug=$request->slug;
       $post->body=$request->body;
       $post->save();
       Session::flash('success','The blog post was successfully saved!!');
       return redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $post=Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $post=Post::find($id);
    if($request->input('slug')==$post->slug){
        $request->validate(['title'=>'required','body'=>'required']);
        }
        else{
        $request->validate(['title'=>'required','body'=>'required','slug'=>'required|alpha_dash|min:5|unique:posts,slug']);
        }
        $post->title=$request->input('title');
        $post->slug=$request->input('slug');
        $post->body=$request->input('body');
        $post->save();
        Session::flash('success','The blog is updated successfully');
        return redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $ids
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
        Session::flash('success','The post was successfully deleted');
        return redirect()->route('posts.index');
    }
}
