@extends('layouts.app')
@section('edit')
<h1 class="text-center text-primary m-5">Edit ask</h1>

<form action="{{route('ask.update', $post->id)}}" method="POST" class="m-5 mx-auto w-25">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input class="form-control" type="text" name="title" value="{{$post->title}}" value="{{ old('title') }}">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
        <input class="form-control" type="text" name="body" value="{{$post->body}}" value="{{ old('body') }}">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection