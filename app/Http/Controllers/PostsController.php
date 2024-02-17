<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    
    public function index()
    {
        $post = Post::all();
        return view('posts.index', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // $post = new Post();
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();

        Post::create([
            'title' => $request->title, 
            'body' => $request->body
        ]);

        return response('done');
    }

    public function show()
    {
        $post = Post::withTrashed()
        ->get();
        return view('posts.archive', compact('post'));
    }

    public function edit(string $id)
    {
        // $post = Post::findOrFail($id); //find work only with [id]
        $post = Post::where('id', $id)->first();

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, string $id)
    {
        $post = Post::findOrFail($id);

        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();

        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('posts.index');
    }

    public function destroy(string $id)
    {
        Post::destroy($id);
        return redirect()->route('posts.index');

    }

    public function restore($id){
        Post::withTrashed()
        ->where('id', $id)
        ->restore();

        return redirect()->back();
        // return redirect()->route('posts.index');

    }

    public function forceDelete($id){
        Post::withTrashed()
        ->where('id', $id)
        ->forceDelete();

        return redirect()->back();
        // return redirect()->route('posts.index');

    }

}
