

@extends('layouts.app')
@section('create')
<h1 class="text-center text-primary m-5">Create new post</h1>

<form action="{{route('posts.store')}}" method="POST" class="m-5 mx-auto w-25">
    @csrf
    

    <div class="mb-3">
        <label class="form-label">Title</label>
        <input class="form-control" type="text" name="title">
    </div>
    <div class="mb-3">
        <label class="form-label">Body</label>
        <input type="text" class="form-control" name="body">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>

</form>

@endsection