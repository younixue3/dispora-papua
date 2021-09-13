@extends('template/master')
@section('title', 'Page')
@section('content')
    <div class="bg-white shadow-lg border rounded-xl p-5">
        <div class="mb-2 flex">
            <div class="w-full text-left">
               <a href="{{route('atlet.add')}}" class="bg-blue-500 hover:bg-blue-400 text-white text-center rounded-md shadow-md px-5 py-1"><span class="align-text-top">Tambah</span></a>
            </div>
            <div class="w-full text-right">
                <form action="{{route('atlet.export')}}" class="flex">
                    <select name="search" class="flex-1 block w-full rounded-xl focus:outline-none px-3 py-2 border border-gray-300">
                        <option>Semua</option>
                        <option>Kabupaten Berau</option>
                        <option>Kabupaten Kutai Barat</option>
                        <option>Kabupaten Kutai Kartanegara</option>
                        <option>Kabupaten Kutai Timur</option>
                        <option>Kabupaten Mahakam Ulu</option>
                        <option>Kabupaten Paser</option>
                        <option>Kabupaten Penajam Paser Utara</option>
                        <option>Kota Balikpapan</option>
                        <option>Kota Bontang</option>
                        <option>Kota Samarinda</option>
                    </select>
                    <button type="submit" class="inline-block bg-purple-500 hover:bg-purple-400 text-white text-center rounded-md shadow-md px-5 py-1"><span class="align-text-top">Export</span></button>
                </form>
                <form action="{{route('atlet.index')}}">
                    <div class="flex rounded-md rounded-r-xl shadow-sm border shadow-xl my-2">
                        <input type="text" name="search" class="flex-1 block rounded-l-xl focus:outline-none g px-3 py-1" placeholder="Cari Atlet">
                        <button type="submit" class="inline-flex items-center rounded-r-xl border-l-0 border border-indigo-100 bg-indigo-100 text-white w-10 h-9">
                            <i class="fas fa-search text-gray-600 text-2xl m-auto"></i>
                        </button>
                    </div>
                </form>
            </div>
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
            @foreach($atlet as $item)
                <tr class="hover:bg-blue-100 transition-all duration-200">
                    <td class="py-1 pl-4">
                        <div class="flex items-center">
                            <div class="text-left my-auto">
                                {{$item->nama_lengkap}}
                                <div class="text-sm text-gray-500">{{$item->no_ktp}}</div>
                            </div>
                        </div>
                    </td>
                    <td class="py-1">{{$item->cabang_olahraga}}</td>
                    <td class="py-1">
                        <a href="{{route('atlet.export_atlet', $item->id)}}">
                            <button class="bg-green-500 text-white text-center rounded-md shadow-md px-5 py-1 relative">
                                <span class="align-text-top">View</span>
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$atlet->links()}}
    </div>
@endsection
