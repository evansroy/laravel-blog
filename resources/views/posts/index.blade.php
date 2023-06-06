@extends('layouts.app')

@section('content')
    <h3 class="text-3xl font-bold">Posts</h3>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="border border-gray-300 p-4 mb-2">
                <h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a> </h3>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
            <p>No Posts Found</p>
    @endif
@endsection
