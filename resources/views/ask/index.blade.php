@extends('layouts.app')
@section('show')
<h1 class="text-center text-primary m-5">Show All Ask</h1>



@foreach ($post as $post)
<div class="card d-flex justify-content-center mx-auto" style="width: 18rem; ">
    <div class="card-body bg-white">
        <h5 class="card-title text-bold text-success text-uppercase ">{{$post->title}}</h5>
        <p class="card-text">[{{$post->body}}]</p>
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{route('ask.edit', $post->id)}}" class="card-link">Edit</a>
            <form action="{{route('ask.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-white text-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
<br>
@endforeach

@endsection