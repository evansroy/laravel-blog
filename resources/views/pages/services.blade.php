@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold">{{ $title }}</h1>
    @if (count($services) > 0)
        <ul role="list" class="divide-y divide-gray-100">
            @foreach ($services as $service)
                <li class="flex justify-between gap-x-6 py-5">
                    <div class="flex gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">{{$service}}</p>
                        </div>
                    </div>
                </li>

            @endforeach
        </ul>
    @endif
@endsection
