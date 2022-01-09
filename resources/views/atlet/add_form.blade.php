@extends('template/master')
@section('title', 'Page')
@section('content')
    <div class="bg-white shadow-lg border rounded-xl p-5">
        <form id="form" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 gap-y-2">
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Nama Lengkap</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="nama_lengkap" id="nama_lengkap">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">No. Kartu Keluarga</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="no_kartu_keluarga" id="no_kartu_keluarga">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">No. KTP</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="no_ktp" id="no_ktp">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Tahun Bergabung NPC</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="tahun_npc" id="tahun_npc">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">NPCI KOTA / KABUPATEN</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="npci_kota_kab" id="npci_kota_kab">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">NPCI PROVINSI</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="npci_provinsi" id="npci_provinsi">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Kartu keluarga</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" type="file" name="kartu_keluarga" id="kartu_keluarga">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">KTP</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" type="file" name="ktp" id="ktp">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Pas Foto</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" type="file" name="pas_foto" id="pas_foto">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Nomor handphone</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="no_hp" id="no_hp">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">E-mail</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="email" id="email">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Tempat, tanggal lahir</label>
                    <div>
                        <input class="border-2 w-1/4 rounded-lg px-2 py-1" name="tempat_lahir" id="tempat_lahir">
                        <input class="border-2 w-1/4 rounded-lg px-2 py-1" name="tanggal_lahir" id="tanggal_lahir" type="date">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Agama</label>
                    <div>
                        <select class="border-2 w-1/5 rounded-lg px-2 py-1" name="agama" id="agama">
                            <option selected disabled>Pilih agama</option>
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Status pernikahan</label>
                    <div>
                        <select class="border-2 w-1/2 rounded-lg px-2 py-1" name="pernikahan" id="pernikahan">
                            <option selected disabled>Pilih satus pernikahan</option>
                            <option value="belum menikah">Belum menikah</option>
                            <option value="menikah">Menikah</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Jenis kelamin</label>
                    <div>
                        <span>
                        <input type="radio" name="jenis_kelamin" value="lakiLaki" class="jenis_kelamin">
                            <label>Laki-laki</label>
                        </span>
                        <span>
                        <input type="radio" name="jenis_kelamin" value="perempuan" class="jenis_kelamin">
                            <label>Perempuan</label>
                        </span>
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Pekerjaan</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="pekerjaan" id="pekerjaan">
                    </div>
                </div>
                <div class="w-2/3">
                    <label class="font-semibold pl-2 text-gray-500">Alamat</label>
                    <div class="grid grid-cols-3 gap-2">
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Jalan</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_jalan" id="alamat_jalan">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">RT. RW Kelurahan</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_rt_rw" id="alamat_rt_rw">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Kecamatan</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_kecamatan" id="alamat_kecamatan">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Kabupaten</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_kabupatan" id="alamat_kabupatan">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Provinsi</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_provinsi" id="alamat_provinsi">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Kode Pos</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="alamat_kode_pos" id="alamat_kode_pos">
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Hobi</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="hobi" id="hobi">
                    </div>
                </div>
                <div class="w-1/3 grid grid-cols-2 gap-2">
                    <span>
                        <label class="font-semibold pl-2 text-gray-500">Tinggi badan</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="tinggi_badan" id="tinggi_badan">
                        </div>
                    </span>
                    <span>
                        <label class="font-semibold pl-2 text-gray-500">Berat badan</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="berat_badan" id="berat_badan">
                        </div>
                    </span>
                </div>
                <div class="w-1/2 grid grid-cols-3 gap-2">
                    <span>
                        <label class="font-semibold pl-2 text-gray-500">Ukuran baju</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="ukuran_baju" id="ukuran_baju">
                        </div>
                    </span>
                    <span>
                        <label class="font-semibold pl-2 text-gray-500">Ukuran celana</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="ukuran_celana" id="ukuran_celana">
                        </div>
                    </span>
                    <span>
                        <label class="font-semibold pl-2 text-gray-500">Ukuran sepatu</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="ukuran_sepatu" id="ukuran_sepatu">
                        </div>
                    </span>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Golongan darah</label>
                    <div>
                        <input class="border-2 w-1/12 rounded-lg px-2 py-1" name="gol_darah" id="gol_darah">
                    </div>
                </div>
                <div class="w-1/2">
                    <label class="font-semibold pl-2 text-gray-500">Nomor Passport</label>
                    <div class="grid grid-cols-2 gap-2">
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Terbit</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="passport_terbit" id="passport_terbit">
                            </div>
                        </div>
                        <div>
                            <label class="font-semibold pl-2 text-gray-500">Kadaluwarsa</label>
                            <div>
                                <input class="border-2 w-full rounded-lg px-2 py-1" name="passport_kadaluwarsa" id="passport_kadaluwarsa">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 w-1/2">
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Pendidikan SD/SLB</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="pendidikan_sd" id="pendidikan_sd">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Tahun lulus</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="tahun_lulus_sd" id="tahun_lulus_sd">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 w-1/2">
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Pendidikan SMP/MTs/SLB</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="pendidikan_smp" id="pendidikan_smp">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Tahun lulus</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="tahun_lulus_smp" id="tahun_lulus_smp">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 w-1/2">
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Pendidikan SMA/SMK/SLB</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="pendidikan_sma" id="pendidikan_sma">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Tahun lulus</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="tahun_lulus_sd" id="tahun_lulus_sd">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-2 w-4/5">
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Pendidikan Kuliah</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="pendidikan_kuliah" id="pendidikan_kuliah">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Jurusan</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="jurusan_kuliah" id="jurusan_kuliah">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Periode kuliah</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="periode_kuliah" id="periode_kuliah">
                        </div>
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Cabang Olahraga</label>
                    <div>
                        <input class="border-2 w-1/2 rounded-lg px-2 py-1" name="cabor" id="cabor">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Kelas Klasifikasi Cabor</label>
                    <div>
                        <input class="border-2 w-1/3 rounded-lg px-2 py-1" name="kelas_klafisikasi_cabor" id="kelas_klafisikasi_cabor">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Status klasifikasi</label>
                    <div>
                        <input class="border-2 w-1/3 rounded-lg px-2 py-1" name="status_klasifikasi" id="status_klasifikasi">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Status Prestasi Atlet</label>
                    <div>
                        <input class="border-2 w-1/3 rounded-lg px-2 py-1" name="status_prestasi_atlet" id="status_prestasi_atlet">
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 w-1/2">
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Riwayat klasifikasi</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="riwayat_klasifikasi" id="riwayat_klasifikasi">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Tahun klafisilasi</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="tahun_klasifikasi" id="tahun_klasifikasi">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 w-1/2">
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Riwayat kesehatan & cedera</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="riwayat_kesehatan_cedera" id="riwayat_kesehatan_cedera">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Tahun Checkup</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="tahun_checkup" id="tahun_checkup">
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-2 w-1/2">
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Vaksinasi Covid-19</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="vaksin_covid" id="vaksin_covid">
                        </div>
                    </div>
                    <div>
                        <label class="font-semibold pl-2 text-gray-500">Tanggal vaksin Kedua</label>
                        <div>
                            <input class="border-2 w-full rounded-lg px-2 py-1" name="tgl_vaksin_kedua" id="tgl_vaksin_kedua">
                        </div>
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Riwayat disabilitas</label>
                    <div>
                        <input class="border-2 w-1/3 rounded-lg px-2 py-1" name="riwayat_disabilitas" id="riwayat_disabilitas">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Alat bantu disabilitas</label>
                    <div>
                        <input class="border-2 w-1/3 rounded-lg px-2 py-1" name="alat_bantu_disabilitas" id="alat_bantu_disabilitas">
                    </div>
                </div>
                <div>
                    <label class="font-semibold pl-2 text-gray-500">Jenis disabilitas</label>
                    <div>
                        <input class="border-2 w-1/3 rounded-lg px-2 py-1" name="jenis_disabilitas" id="jenis_disabilitas">
                    </div>
                </div>
            </div>
            <div class="flex flex-col mt-5">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Ajang / Event
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nomor pertandingan yang diikuti
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tahun
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Tempat
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="table_event" class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <input id="nama_sevent_1" type="text" placeholder="Ajang / Event">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <input id="nomor_pertandingan_sevent_1" type="text"
                                               placeholder="Nomor pertandingan yang diikuti">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <input id="tahun_sevent_1" type="text" placeholder="Tahun">
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        <input id="tempat_sevent_1" type="text" placeholder="Tempat">
                                    </td>
                                </tr>
                                <!-- More people... -->
                                </tbody>
                            </table>
                        </div>
                        <button type="button"
                                class="bg-red-500 mt-5 hover:bg-red-400 text-white text-center rounded-md shadow-md px-5 py-1 float-right"
                                id="add_event">add
                        </button>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <input id="submit_storage" type="button"
                       class="bg-blue-500 hover:bg-blue-400 text-white text-center rounded-md shadow-md px-5 py-1"
                       value="Submit">
                <a href="{{route('atlet.index')}}"
                   class="bg-red-500 hover:bg-red-400 text-white text-center rounded-md shadow-md px-5 py-1">Cancel</a>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        const arr = {data: {atlet: null, sevent: [], mevent: []}}
        var counter = 1;
        var status = 1;
        $(document).ready(function () {
            i = 1;
            $('#add_event').click(function () {
                i++;
                counter = i
                $('#table_event').append('<tr><td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><input id="nama_sevent_' + i + '" type="text" placeholder="Ajang / Event"></td><td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><input id="nomor_pertandingan_sevent_' + i + '" type="text" placeholder="Nomor pertandingan yang diikuti"></td><td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><input id="tahun_sevent_' + i + '" type="text" placeholder="Tahun"></td><td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><input id="tempat_sevent_' + i + '" type="text" placeholder="Tempat"></td></tr>')
            });
        });

        $('#submit_storage').click(function () {
            // console.log($('#nama_lengkap').val())
            // var datanya = {
            //     name_lengkap: $('#nama_lengkap').val(),
            //     no_kartu_keluarga: $('#no_kartu_keluarga').val(),
            //     no_ktp: $('#no_ktp').val(),
            //     tahun_npc: $('#tahun_npc'),
            //     npci_kota_kab: $('#npci_kota_kab').val(),
            //     npci_provinsi: $('#npci_provinsi').val(),
            //     kartu_keluarga: $('#kartu_keluarga').val(),
            //     ktp: $('#ktp').val(),
            //     pas_foto: $('#pas_foto').val(),
            //     no_hp: $('#no_hp').val(),
            //     email: $('#email').val(),
            //     tempat_lahir: $('#tempat_lahir').val(),
            //     tanggal_lahir: $('#tanggal_lahir').val(),
            //     agama: $('#agama').val(),
            //     pernikahan: $('#pernikahan').val(),
            //     jenis_kelamin: $('#jenis_kelamin'),
            //     pekerjaan: $('#pekerjaan'),
            //     alamat: $('#alamat'),
            //     rt_rw: $('#rt_rw'),
            //     kecamatan: $('#kecamatan'),
            //     kabupaten: $('#kabupaten'),
            //     provinsi: $('#provinsi'),
            //     kode_pos: $('#kode_pos'),
            //     hobi: $('#hobi'),
            //     tinggi_badan: $('#tinggi_badan'),
            //     berat_badan: $('#berat_badan'),
            //     ukuran_baju: $('#ukuran_baju'),
            //     ukuran_celana: $('#ukuran_celana'),
            //     ukuran_sepatu: $('#ukuran_sepatu'),
            //     gol_darah: $('#gol_darah'),
            //     passport_terbit: $('#passport_terbit'),
            //     passport_kadaluwarsa: $('#passport_kadaluwarsa'),
            //     pendidikan_sd: $('#pendidikan_sd'),
            //     tahun_lulus_sd: $('#tahun_lulus_sd'),
            //     pendidikan_smp: $('#pendidikan_smp'),
            //     tahun_lulus_smp: $('#tahun_lulus_smp'),
            //     pendidikan_sma: $('#pendidikan_sma'),
            //     tahun_lulus_sma: $('#tahun_lulus_sma'),
            //     pendidikan_kuliah: $('#pendidikan_kuliah'),
            //     jurusan_kuliah: $('#jurusan_kuliah'),
            //     periode_kuliah: $('#periode_kuliah'),
            //     cabor: $('#cabor'),
            //     kelas_klasifikasi_cabor: $('#kelas_klasifikasi_cabor'),
            //     status_klasifikasi: $('#status_klasifikasi'),
            //     status_prestasi_atlet: $('#status_prestasi_atlet'),
            //     riwayat_klasifikasi: $('#riwayat_klasifikasi'),
            //     tahun_klasifikasi: $('#tahun_klasifikasi'),
            //     riwayat_kesehatan_cedera: $('#riwayat_kesehatan_cedera'),
            //     tahun_checkup: $('#tahun_checkup'),
            //     vaksin_covid: $('#vaksin_covid'),
            //     tgl_vaksin_kedua: $('#tgl_vaksin_kedua'),
            //     riwayat_disabilitas: $('#riwayat_disabilitas'),
            //     alat_bantu_disabilitas: $('#alat_bantu_disabilitas'),
            //     jenis_disabilitas: $('#jenis_disabilitas'),
            // }
            // console.log(window.location.origin + '/atlet/form/store')
            // if (status == 1) {
            //     console.log(counter);
            //     for (var i = 1; ; i++) {
            //         arr.data.sevent.push({
            //             nama_event: $('#nama_sevent_' + i).val(),
            //             nomor_pertandingan_event: $('#nomor_pertandingan_sevent_' + i).val(),
            //             tahun_sevent: $('#tahun_sevent_' + i).val(),
            //             tempat_sevent: $('#tempat_sevent_' + i).val()
            //         })
            //         if (i == counter) break;
            //     }
            //     status = 0;
            // } else {
            //     alert("data anda telah di input")
            // }
            $.ajax({
                type: "POST",
                url: window.location.origin + '/atlet/form/store',
                dataType: 'json',
                data: {
                    name_lengkap: $('#nama_lengkap').val(),
                    no_kartu_keluarga: $('#no_kartu_keluarga').val(),
                    no_ktp: $('#no_ktp').val(),
                    tahun_npc: $('#tahun_npc').val(),
                    npci_kota_kab: $('#npci_kota_kab').val(),
                    npci_provinsi: $('#npci_provinsi').val(),
                    kartu_keluarga: $('#kartu_keluarga').val(),
                    ktp: $('#ktp').val(),
                    pas_foto: $('#pas_foto').val(),
                    no_hp: $('#no_hp').val(),
                    email: $('#email').val(),
                    tempat_lahir: $('#tempat_lahir').val(),
                    tanggal_lahir: $('#tanggal_lahir').val(),
                    agama: $('#agama').val(),
                    pernikahan: $('#pernikahan').val(),
                    jenis_kelamin: $('.jenis_kelamin:checked').val(),
                    pekerjaan: $('#pekerjaan').val(),
                    alamat: $('#alamat').val(),
                    rt_rw: $('#rt_rw').val(),
                    kecamatan: $('#kecamatan').val(),
                    kabupaten: $('#kabupaten').val(),
                    provinsi: $('#provinsi').val(),
                    kode_pos: $('#kode_pos').val(),
                    hobi: $('#hobi').val(),
                    tinggi_badan: $('#tinggi_badan').val(),
                    berat_badan: $('#berat_badan').val(),
                    ukuran_baju: $('#ukuran_baju').val(),
                    ukuran_celana: $('#ukuran_celana').val(),
                    ukuran_sepatu: $('#ukuran_sepatu').val(),
                    gol_darah: $('#gol_darah').val(),
                    passport_terbit: $('#passport_terbit').val(),
                    passport_kadaluwarsa: $('#passport_kadaluwarsa').val(),
                    pendidikan_sd: $('#pendidikan_sd').val(),
                    tahun_lulus_sd: $('#tahun_lulus_sd').val(),
                    pendidikan_smp: $('#pendidikan_smp').val(),
                    tahun_lulus_smp: $('#tahun_lulus_smp').val(),
                    pendidikan_sma: $('#pendidikan_sma').val(),
                    tahun_lulus_sma: $('#tahun_lulus_sma').val(),
                    pendidikan_kuliah: $('#pendidikan_kuliah').val(),
                    jurusan_kuliah: $('#jurusan_kuliah').val(),
                    periode_kuliah: $('#periode_kuliah').val(),
                    cabor: $('#cabor').val(),
                    kelas_klasifikasi_cabor: $('#kelas_klasifikasi_cabor').val(),
                    status_klasifikasi: $('#status_klasifikasi').val(),
                    status_prestasi_atlet: $('#status_prestasi_atlet').val(),
                    riwayat_klasifikasi: $('#riwayat_klasifikasi').val(),
                    tahun_klasifikasi: $('#tahun_klasifikasi').val(),
                    riwayat_kesehatan_cedera: $('#riwayat_kesehatan_cedera').val(),
                    tahun_checkup: $('#tahun_checkup').val(),
                    vaksin_covid: $('#vaksin_covid').val(),
                    tgl_vaksin_kedua: $('#tgl_vaksin_kedua').val(),
                    riwayat_disabilitas: $('#riwayat_disabilitas').val(),
                    alat_bantu_disabilitas: $('#alat_bantu_disabilitas').val(),
                    jenis_disabilitas: $('#jenis_disabilitas').val(),
                },
                error: function (e) {
                    // console.log('gagal')
                    console.log(e)
                },
                success: function (data) {
                    // console.log('berhasil')
                    console.log(data)
                    arr.data.atlet = data;
                    $.ajax({
                        type: "POST",
                        url: window.location.origin + '/daftar/anggota',
                        data: arr,
                        error: function (e) {
                            console.log(e)
                        },
                        success: function (data) {
                            console.log(data)
                        }
                    });
                }
            });
            console.log(arr.data.kelompok)

        });
    </script>
@endsection
