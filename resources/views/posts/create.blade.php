@extends('layouts.app')

@section('content')
    <h3 class="text-3xl font-bold">Create Post</h3>
    {!! Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('title', 'Title', ['class' => 'block font-medium text-sm text-gray-700']) }}
        {{ Form::text('title', null, ['class' => 'form-input mt-1 block w-full rounded-md shadow-sm p-4 placeholder => Enter Post Title']) }}
    </div>

    <div class="form-group">
        {{ Form::label('body', 'Body', ['class' => 'block font-medium text-sm text-gray-700']) }}
        {{ Form::textarea('body', null, ['class' => 'form-input mt-1 block w-full rounded-md shadow-sm p-4 placeholder => Enter Post Body']) }}
    </div>

    {{ Form::submit('Submit', ['class' => 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4']) }}
    {!! Form::close() !!}
@endsection
