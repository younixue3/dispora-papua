@extends('layouts.app')

@section('content')
<div class="absolute bg-white shadow-lg border border-gray-300 rounded-xl h w-72 md:w-96 left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
    <div class="my-10">
        <div class="text-4xl font-bold">Welcome</div>
        <div class="text-lg font-light leading-3">Sign in to your account</div>
    </div>
    <form method="POST" action="{{ route('login') }}" class="mx-5 my-10">
        @csrf
        <input id="email" type="email" class="flex-1 block w-full rounded-t-xl focus:outline-none px-3 py-1.5 border border-b-0 @error('email')  @enderror border-gray-300" placeholder="Email">
        <input type="password" class="flex-1 block w-full rounded-b-xl focus:outline-none px-3 py-1.5 border border-gray-300" placeholder="Password">
        <div class="flex items-start pl-1 mt-2 mx-1">
            <div class="flex items-center h-5">
                <input class="m-auto h-4 w-4 rounded" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            </div>
            <div class="ml-2 text-sm">
                <label class="font-medium text-gray-700">Remember Me</label>
            </div>
        </div>
    </form>
    <div class="mx-5 my-10">
        <div class="m-auto flex space-x-5">
            <button class="bg-indigo-500 text-xl text-white text-center rounded-md shadow-md w-full px-5 py-1"><span class="align-text-top">Sign in</span></button>
        </div>
    </div>
</div>
@endsection
