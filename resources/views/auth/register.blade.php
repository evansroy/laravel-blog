@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex justify-center">
        <div class="w-8/12">
            <div class="bg-white shadow-md rounded-lg p-5">
                <div class="card-header text-3xl font-bold mb-4">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>

                            <div class="mt-1">
                                <input id="name" type="text" class="input-field shadow-md @error('name') border-red-500 @enderror mt-1 block w-full rounded-md p-4" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>

                            <div class="mt-1">
                                <input id="email" type="email" class="input-field shadow-md @error('email') border-red-500 @enderror mt-1 block w-full rounded-md p-4" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>

                            <div class="mt-1">
                                <input id="password" type="password" class="input-field shadow-md @error('password') border-red-500 @enderror mt-1 block w-full rounded-md p-4" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>

                            <div class="mt-1">
                                <input id="password-confirm" type="password" class="input-field shadow-md mt-1 block w-full rounded-md p-4" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="flex items-center">
                                <button type="submit" class="btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
