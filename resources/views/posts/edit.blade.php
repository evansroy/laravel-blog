@extends('layouts.app')

@section('content')
    <h3 class="text-3xl font-bold">Edit Post</h3>
    {!! Form::open(['action' => ['App\Http\Controllers\PostController@update', $post->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title', ['class' => 'block font-medium text-sm text-gray-700']) }}
        {{ Form::text('title', $post->title, ['class' => 'form-input mt-1 block w-full rounded-md shadow-sm p-4 placeholder => Enter Post Title']) }}
    </div>

    <div class="form-group">
        {{ Form::label('body', 'Body', ['class' => 'block font-medium text-sm text-gray-700']) }}
        {{ Form::textarea('body', $post->body, ['id' => 'body', 'class' => 'form-input mt-1 block w-full rounded-md shadow-sm p-4 placeholder => Enter Post Body']) }}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{ Form::submit('Submit', ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4']) }}
    {!! Form::close() !!}
@endsection
