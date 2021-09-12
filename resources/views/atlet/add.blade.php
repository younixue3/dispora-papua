@extends('template/master')
@section('title', 'Page')
@section('content')
    <div class="bg-white shadow-lg border rounded-xl p-5">
        <form action="{{route('atlet.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input class="w-full" id="file" name="file" type="file">
            <div class="mt-10">
                <input type="submit" class="bg-blue-500 hover:bg-blue-400 text-white text-center rounded-md shadow-md px-5 py-1" value="Submit">
                <a href="{{route('atlet.index')}}" class="bg-red-500 hover:bg-red-400 text-white text-center rounded-md shadow-md px-5 py-1">Cancel</a>
            </div>
        </form>
    </div>
@endsection
