<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;

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
        $users = User::count();
        $publish = Post ::where('status','published')->count();
        $recent_post = Post ::where('status','published')->orderBy('created_at','desc')->take(5)->get();
        $postCount = Post::count();
        $pendingPosts = Post::where('status', 'pending')->count();
        return view('home',compact('postCount','pendingPosts','publish','users','recent_post'));
    }
    public function about(){

        return view('layouts\about');
        
    }
}
