@extends('layouts.app')
@section('create')
<h1 class="text-center text-primary m-5">Create new post</h1>

<form action="{{route('posts.store')}}" method="POST" class="m-5 mx-auto w-25">
    @csrf


    <div class="mb-3">
        <label class="form-label">Title</label>
        <input class="form-control" type="text" name="title" value="{{ old('title') }}">
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
        <input type="text" class="form-control" name="body" value="{{ old('body') }}">
        @error('body')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create</button>

</form>

@endsection