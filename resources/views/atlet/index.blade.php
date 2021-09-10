@extends('template/master')
@section('title', 'Page')
@section('content')
    <div class="bg-white shadow-lg border rounded-xl p-5">
        <div class="mb-2">
            <a href="{{route('atlet.add')}}" class="bg-blue-500 hover:bg-blue-400 text-white text-center rounded-md shadow-md px-5 py-1"><span class="align-text-top">Add</span></a>
        </div>
        <table class="w-full text-center">
            <thead class="bg-gray-100">
            <tr>
                <th class="py-1">Name</th>
                <th class="py-1">Cabang Olahraga</th>
                <th class="py-1">Action</th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y-2 divide-gray-200">
            <tr class="hover:bg-blue-100 transition-all duration-200">
                <td class="py-1 pl-4">
                    <div class="flex items-center">
                        <img class="h-8 w-8 mr-2 rounded-full"
                             src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                             alt="">
                        <div class="text-left my-auto">
                            Jane Doe
                            <div class="text-sm text-gray-500">janedoe@example.com</div>
                        </div>
                    </div>
                </td>
                <td class="py-1">BackEnd Web Developer</td>
                <td class="py-1">
                    <button class="bg-indigo-500 text-white text-center rounded-md shadow-md px-5 py-1 relative">
                        <span class="align-text-top">View</span>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
