@extends('layouts.app')

@section('content')
    <a href="/posts" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Go Back</a>
    <h3 class="text-3xl font-bold">{{$post->title}}</h3>
    <div>
        {{$post->body}}
    </div>
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection
