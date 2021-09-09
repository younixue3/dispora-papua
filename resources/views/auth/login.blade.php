@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('login') }}"
        class="absolute bg-white shadow-lg border border-gray-300 rounded-xl h w-72 md:w-96 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
        <div class="my-10">
            <div class="text-4xl font-bold">Welcome</div>
            <div class="text-lg font-light leading-3">Sign in to your account</div>
            <div class="px-5 pt-5">
                @error('email')
                <div class="bg-red-400 rounded-xl text-white">
                    <p class="text-sm">{{$message}}</p>
                </div>
                @else
                    @error('password')
                    <div class="bg-red-400 rounded-xl text-white">
                        <p class="text-sm">{{$message}}</p>
                    </div>
                    @enderror
                @enderror
            </div>
        </div>
        <div class="mx-5 my-10">
            @csrf
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email"
                   autofocus
                   class="flex-1 block w-full rounded-t-xl focus:outline-none px-3 py-1.5 border border-b-0 border-gray-300 @error('email') ring-2 ring-red-500 @enderror"
                   placeholder="Email">
            <input id="password" type="password" name="password" required autocomplete="current-password"
                   class="flex-1 block w-full rounded-b-xl focus:outline-none px-3 py-1.5 border border-gray-300 @error('password') ring-2 ring-red-500 @enderror"
                   placeholder="Password">
            <div class="flex items-start pl-1 mt-2 mx-1">
                <div class="flex items-center h-5">
                    <input class="m-auto h-4 w-4 rounded" type="checkbox" name="remember"
                           id="remember" {{ old('remember') ? 'checked' : '' }}>
                </div>
                <div class="ml-2 text-sm">
                    <label class="font-medium text-gray-700">Remember Me</label>
                </div>
            </div>
        </div>
        <div class="mx-5 my-10">
            <div class="m-auto flex space-x-5">
                <input type="submit" class="bg-indigo-500 text-xl text-white text-center rounded-md shadow-md w-full px-5 py-1" value="Sign in">
            </div>
        </div>
    </form>
@endsection
