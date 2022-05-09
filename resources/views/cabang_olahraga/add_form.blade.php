@extends('template/master')
@section('title', 'Page')
@section('content')
    <div class="bg-white shadow-lg border rounded-xl p-5">
        <form id="form" method="POST" enctype="multipart/form-data" action="{{route('cabang_olahraga.store')}}">
            @csrf
            <div class="grid grid-cols-1 gap-y-2">
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Nama Cabang Olahraga</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="nama_cabang_olahraga">
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <input id="submit_storage" type="submit"
                       class="bg-blue-500 hover:bg-blue-400 text-white text-center rounded-md shadow-md px-5 py-1 cursor-pointer"
                       value="Submit">
                <a href="{{route('atlet.index')}}"
                   class="bg-red-500 hover:bg-red-400 text-white text-center rounded-md shadow-md px-5 py-1">Cancel</a>
            </div>
        </form>
    </div>
    <style>
    </style>
@endsection
@section('script')
    <script>
    </script>
@endsection
