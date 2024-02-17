@extends('layouts.app')
@section('edit')
<h1 class="text-center text-primary m-5">Edit Post</h1>

<form action="{{route('posts.update', $post->id)}}" method="POST" class="m-5 mx-auto w-25">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input class="form-control" type="text" name="title" value="{{$post->title}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
        <input class="form-control" type="text" name="body" value="{{$post->body}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection