<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Controllers\Auth;
use Session;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
 $posts=Post::orderBy('id','desc')->limit(4)->get();
    return view('pages.welcome')->withPosts($posts);
    }
    public function logout()
    {

        return view('auth.login');
       
	    
}
}

