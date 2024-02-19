<?php
namespace App\Http\Controllers;
use App\Models\Ask;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;

class AskController extends Controller
{
    
    public function index()
    {
        $post = Ask::all();
        return view('ask.index', compact('post'));
    }

    public function create()
    {
        return view('ask.create');
    }

    public function store(StorePostRequest $request)
    {
        // $post = new Post();
        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();

        // $request->validate([
        //     'title' => 'required',
        //     'body' => 'required'
        // ]);

        Ask::create([
            'title' => $request->title, 
            'body' => $request->body
        ]);

        return redirect()->route('ask.index');
    }

    public function show()
    {
        $post = Ask::withTrashed()
        ->get();
        return view('ask.archive', compact('post'));
    }

    public function edit(string $id)
    {
        // $post = Post::findOrFail($id); //find work only with [id]
        $post = Ask::where('id', $id)->first();
        
        return view('ask.edit', compact('post'));
    }

    public function update(StorePostRequest $request, string $id)
    {
        $post = Ask::findOrFail($id);

        // $post->title = $request->title;
        // $post->body = $request->body;
        // $post->save();

        // $request->validate([
        //     'title' => ['required', 'unique:ask', 'max:255'],
        //     'body' => ['required'],
        // ]);

        $post->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        return redirect()->route('ask.index');
    }

    public function destroy(string $id)
    {
        Ask::destroy($id);
        return redirect()->route('ask.index');

    }

    // public function restore($id){
    //     Ask::withTrashed()
    //     ->where('id', $id)
    //     ->restore();

    //     return redirect()->back();
    //     // return redirect()->route('posts.index');

    // }

    // public function forceDelete($id){
    //     Ask::withTrashed()
    //     ->where('id', $id)
    //     ->forceDelete();

    //     return redirect()->back();
    //     // return redirect()->route('posts.index');

    // }

}
