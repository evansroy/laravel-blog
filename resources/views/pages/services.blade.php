@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold">{{ $title }}</h1>
    @if (count($services) > 0)
        <ul class="list-none">
            @foreach ($services as $service)
                <li class="mb-2">{{ $service }}</li>
            @endforeach
        </ul>
    @endif
@endsection
