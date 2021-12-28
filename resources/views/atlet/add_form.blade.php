@extends('template/master')
@section('title', 'Page')
@section('content')
    <div class="bg-white shadow-lg border rounded-xl p-5">
        <form action="{{route('atlet.form_store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-y-2">
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Nama Lengkap</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="nama_lengkap">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">No. Kartu Keluarga</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="kartu_keluarga">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">No. KTP</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="ktp">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Tahun Bergabung NPC</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="tahun_npc">
                    </div>
                </div>
            </div>
            <div>
                <label class="font-semibold pl-2 text-gray-500">NPCI KOTA / KABUPATEN</label>
                <div>
                    <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="">
                </div>
            </div>
            <div class="mt-10">
                <input type="submit" class="bg-blue-500 hover:bg-blue-400 text-white text-center rounded-md shadow-md px-5 py-1" value="Submit">
                <a href="{{route('atlet.index')}}" class="bg-red-500 hover:bg-red-400 text-white text-center rounded-md shadow-md px-5 py-1">Cancel</a>
            </div>
        </form>
    </div>
@endsection
