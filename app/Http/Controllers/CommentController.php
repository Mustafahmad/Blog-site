<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;

class CommentController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:comment-list|comment-create|comment-edit|comment-delete', ['only' => ['index','show']]);
         $this->middleware('permission:comment-create', ['only' => ['create','store']]);
         $this->middleware('permission:comment-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:comment-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $posts = Post::all();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $comments = Comment::all();
        return view('comment.create',compact('comments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required',
        ]);
        Comment::create($validatedData);
        return redirect()->route('comment.index')->with('Success','Comment has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        $commnets = Comment::all();
        return view('comment.show',compact('comments'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        $comments = Comment::all();
        return view('comment.edit',compact('comments'));
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        $validatedData = $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'comment'=> 'required',

        ]);
        $comment->name = $validatedData['name'];
        $comment->email = $validatedData['email'];
        $comment->comment = $validatedData['comment'];
        $comment->save();
        return redirect()->route('post.index')->with('Success', 'comment has been updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('post.index')->with('Success','Comment has been deleted successfully');
    }
}
