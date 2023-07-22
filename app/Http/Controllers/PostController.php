<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Comment;

class PostController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:post-list|post-create|post-edit|post-delete', ['only' => ['index','show']]);
         $this->middleware('permission:post-create', ['only' => ['create','store']]);
         $this->middleware('permission:post-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:post-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('post.index',compact('posts'));
    }
    public function postcount(Post $post, Request $request)
    {
        $count = Post::count();
        return $count;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $posts = Post::all();
        return view('post.create',compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'short_description'=> 'required',
            'content'=> 'required',
            'seo_title' => 'required',
            'seo_desc'=> 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $validatedData['title'] . '.' . $extension;
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        Post::create($validatedData);

     
        return redirect()->route('post.index')->with('success', 'Post has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::find($id);
        $comments = Comment::all();
        return view('post.show',compact('post','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $posts = Post::find($id);
        return view('post.edit',compact('posts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'short_description'=> 'required',
            'content'=> 'required',
            'status'=> 'required',
            'seo_title' => 'required',
            'seo_desc'=> 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
        $post->title = $validatedData['title'];
        $post->description = $validatedData['description'];
        $post->short_description =$validatedData['short_description'];
        $post->content =$validatedData['content'];
        $post->seo_title = $validatedData['seo_title'];
        $post->seo_desc = $validatedData['seo_desc'];
        if ($validatedData['status'] !== $post->status) {
            $post->status = $validatedData['status'];
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $imageName = $validatedData['title'] . '.' . $extension;
            $image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }
        $post->save();
        return redirect()->route('post.index')->with('Success', 'Post has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index')->with('Success','Post has been deleted successfully');
    }
}
