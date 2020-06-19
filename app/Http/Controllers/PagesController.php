<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function getAbout()
    {
    $first="Akshay";
    $last="Sarawgi";
    $fullname=$first." ".$last;
    $email='sarawgi.akshay05@gmail.com';
    return view('pages.about')->withFullname($fullname)->withEmail($email);
    }
    public function getIndex()
    {
    $posts=Post::orderBy('id','desc')->limit(4)->get();
    return view('pages.welcome')->withPosts($posts);
    }
    public function getContact()
    {
        return view('pages.contact');
    }
}
