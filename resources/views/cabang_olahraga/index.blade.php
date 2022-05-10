@extends('template/master')
@section('title', 'Page')
@section('content')
    <div class="bg-white shadow-lg border rounded-xl p-5">

        <div class="mb-2 flex">
            <div class="w-full text-left">
                <a href="{{route('cabang_olahraga.add')}}" class="bg-blue-500 hover:bg-blue-400 text-white text-center rounded-md shadow-md px-5 py-1"><span class="align-text-top">Tambah</span></a>
            </div>
        </div>
        <table class="w-full text-center">
            <thead class="bg-gray-100">
            <tr>
                <th class="py-1">Name</th>
                <th class="py-1">Action</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y-2 divide-gray-200">
            @foreach($cabor as $item)
                <tr class="hover:bg-blue-100 transition-all duration-200">
                    <td class="py-1 pl-4">
                        <div class="flex items-center">
                            <div class="text-left my-auto">
                                {{$item->nama}}
                            </div>
                        </div>
                    </td>
                    <td class="py-1">
                        <a href="{{route('cabang_olahraga.edit', $item->id)}}">
                            <button class="bg-yellow-500 text-white text-center rounded-md shadow-md px-5 py-1 relative">
                                <span class="align-text-top">Edit</span>
                            </button>
                        </a>
                        <a href="{{route('cabang_olahraga.delete', $item->id)}}">
                            <button class="bg-red-500 text-white text-center rounded-md shadow-md px-5 py-1 relative">
                                <span class="align-text-top">Delete</span>
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$cabor->appends(request()->all())->links()}}
    </div>
@endsection
