@extends('layouts.app')

@section('content')
<div class="container">
    <div class="flex justify-center items-center"> 
        <div class="w-8/12">
            <div class="bg-white shadow-md rounded-lg p-5">
                <div class="card-header text-3xl font-bold mb-4">{{ __('Login') }}</div>

                <div class="card-body items-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email Address') }}</label>

                            <div class="mt-1">
                                <input id="email" type="email" class="input-field @error('email') border-red-500 @enderror mt-1 block w-full rounded-md shadow-sm p-4" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>

                            <div class="mt-1">
                                <input id="password" type="password" class="input-field @error('password') border-red-500 @enderror mt-1 block w-full rounded-md shadow-sm p-4" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="flex items-center">
                                <input class="mr-1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="block text-sm text-gray-700" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="flex items-center">
                                <button type="submit" class="btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded m-4">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn-link ml-2" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
