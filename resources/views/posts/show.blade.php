@extends('layouts.app')

@section('content')
    <a href="/posts" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Go Back</a>
    <h3 class="text-3xl font-bold">{{ $post->title }}</h3>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
    <hr class="mb-5">
    <a href="/posts/{{ $post->id }}/edit"
        class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Edit</a>

    {{-- {!!Form::open(['action' => ['App\Http\Controllers\PostController@destory', $post->id], 'method' => 'POST','class' => ''])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{ Form::submit('Delete', ['class' => 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded']) }}
    {!!Form::close()!!} --}}

    {!! Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'flex justify-end']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{ Form::submit('Delete', ['class' => 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded']) }}
    {!! Form::close() !!}
@endsection
