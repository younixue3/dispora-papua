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
                <div>
                    <label class="font-semibold pl-2 text-gray-500">NPCI KOTA / KABUPATEN</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="npci_kota_kab">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">NPCI PROVINSI</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="npci_provinsi">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Kartu keluarga</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" type="file" name="kartu_keluarga">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">KTP</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" type="file" name="ktp">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Pas Foto</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" type="file" name="pas_foto">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Nomor handphone</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="no_hp">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">E-mail</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="email">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Tempat, tanggal lahir</label>
                    <div>
                        <input class="border-2 w-1/4 rounded-lg px-2 py-1" name="tempat_lahir">
                        <input class="border-2 w-1/4 rounded-lg px-2 py-1" name="tanggal_lahir" type="date">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Agama</label>
                    <div>
                        <select class="border-2 w-1/5 rounded-lg px-2 py-1" name="agama">
                            <option selected disabled>Pilih agama</option>
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katolik</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Status pernikahan</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="pernikahan">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Jenis kelamin</label>
                    <div>
                        <span>
                        <input type="radio" name="jenis_kelamin" value="lakiLaki">
                            <label>Laki-laki</label>
                        </span>
                        <span>
                        <input type="radio" name="jenis_kelamin" value="perempuan">
                            <label>Perempuan</label>
                        </span>
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Pekerjaan</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="pekerjaan">
                    </div>
                </div>
                <div class="w-2/3">
                    <label class="font-semibold pl-2 text-gray-500">Alamat</label>
                    <div class="grid grid-cols-3 gap-2">
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Jalan</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_jalan">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">RT. RW Kelurahan</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_rt_rw">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Kecamatan</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_kecamatan">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Kabupaten</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_kabupatan">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Provinsi</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_provinsi">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Kode Pos</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_kode_pos">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Hobi</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="hobi">
                    </div>
                </div>
                <div class="w-1/3 grid grid-cols-2 gap-2">
                    <span>
                        <label class="font-semibold pl-2 text-gray-500">Tinggi badan</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="tinggi_badan">
                        </div>
                    </span>
                    <span>
                        <label class="font-semibold pl-2 text-gray-500">Berat badan</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="berat_badan">
                        </div>
                    </span>
                </div>
                <div class="w-1/2 grid grid-cols-3 gap-2">
                    <span>
                        <label class="font-semibold pl-2 text-gray-500">Ukuran baju</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="ukuran_baju">
                        </div>
                    </span>
                    <span>
                        <label class="font-semibold pl-2 text-gray-500">Ukuran celana</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="ukuran_celana">
                        </div>
                    </span>
                    <span>
                        <label class="font-semibold pl-2 text-gray-500">Ukuran sepatu</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="ukuran_sepatu">
                        </div>
                    </span>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Golongan darah</label>
                    <div>
                        <input class="border-2 w-1/12 rounded-lg px-2 py-1" name="gol_darah">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Jenis kelamin</label>
                    <div>
                        <span>
                        <label class="font-semibold pl-2 text-gray-500">Terbit</label>
                            <div>
                                <input class="border-2 rounded-lg px-2 py-1" name="passport_terbit">
                            </div>
                        </span>
                        <span>
                        <label class="font-semibold pl-2 text-gray-500">Terbit</label>
                            <div>
                                <input class="border-2 rounded-lg px-2 py-1" name="passport_terbit">
                            </div>
                        </span>
                    </div>
                </div>
                <div class="w-1/2">
                    <label class="font-semibold pl-2 text-gray-500">Nomor Passport</label>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Terbit</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="passport_terbit">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Kadaluwarsa</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="passport_kadaluwarsa">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 w-1/2">
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Pendidikan SD/SLB</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="pendidikan_sd">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Tahun lulus</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="tahun_lulus_sd">
                            </div>
                        </div>
                </div>
                <div class="grid grid-cols-2 gap-2 w-1/2">
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Pendidikan SMP/MTs/SLB</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="pendidikan_smp">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Tahun lulus</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="tahun_lulus_smp">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 w-1/2">
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Pendidikan SMA/SMK/SLB</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="pendidikan_sma">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Tahun lulus</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="tahun_lulus_sd">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-2 w-4/5">
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Pendidikan Kuliah</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="pendidikan_kuliah">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Jurusan</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="jurusan_kuliah">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Periode kuliah</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="periode_kuliah">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <input type="submit" class="bg-blue-500 hover:bg-blue-400 text-white text-center rounded-md shadow-md px-5 py-1" value="Submit">
                <a href="{{route('atlet.index')}}" class="bg-red-500 hover:bg-red-400 text-white text-center rounded-md shadow-md px-5 py-1">Cancel</a>
            </div>
        </form>
    </div>
@endsection
