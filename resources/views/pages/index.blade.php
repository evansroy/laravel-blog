@extends('layouts.app')

@section('content')
    <div class="flex justify-center items-center h-screen">
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-4">{{ $title }}</h1>
            <p class="mb-8">This is a Laravel Application for Octal ideas blog</p>
            <div class="flex justify-between">
                <a href=""
                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium">Login</a>
                <a href=""
                    class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md text-sm font-medium">Register</a>
            </div>
        </div>
    </div>
@endsection
