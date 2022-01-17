<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://kit.fontawesome.com/6fd3995802.js" crossorigin="anonymous"></script>
</head>
<body>
    <img src="{{asset('Screenshot 2021-09-12 180415.png')}}">
    <div class="grid grid-cols-10">
        <div class="col-span-3">Nama Lengkap</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->nama_lengkap}}</div>

        <div class="col-span-3">Nomor Kartu Keluarga</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->no_kartu_keluarga}}</div>

        <div class="col-span-3">Nomor KTP</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->no_ktp}}</div>

        <div class="col-span-3">Tahun Bergabung NPC</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->tahun_bergabung_npc}}</div>

        <div class="col-span-3">NPCI Kota/Kabupaten</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->npci_kota_kabupaten}}</div>

        <div class="col-span-3">NPCI Provinsi</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->npci_provinsi}}</div>

        <div class="col-span-3">Link Pas Foto</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->link_pas_foto}}</div>

        <div class="col-span-3">No Handphone</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->no_handphone}}</div>

        <div class="col-span-3">Email</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->email_aktif}}</div>

        <div class="col-span-3">Tempat Lahir</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->tempat_lahir}}</div>

        <div class="col-span-3">Tanggal Lahir</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->tanggal_lahir}}</div>

        <div class="col-span-3">No Handphone</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->agama}}</div>

        <div class="col-span-3">No Handphone</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->status_}}</div>

        <div class="col-span-3">No Handphone</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->no_handphone}}</div>

        <div class="col-span-3">No Handphone</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->no_handphone}}</div>

        <div class="col-span-3">No Handphone</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->no_handphone}}</div>

        <div class="col-span-3">No Handphone</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->no_handphone}}</div>

        <div class="col-span-3">No Handphone</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->no_handphone}}</div>

        <div class="col-span-3">No Handphone</div>
        <div class="col-span-1">:</div>
        <div class="col-span-6 text-left">{{$data->no_handphone}}</div>
    </div>
{{--    <div class="grid grid-cols-5 p-10 gap-5">--}}
{{--        <div class="col-span-1 col-start-1">--}}
{{--            <input class="w-full" disabled value="Nama Lengkap : {{$data->nama_lengkap}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <input class="w-full" disabled value="Nomor Kartu Keluarga : {{$data->no_kartu_keluarga}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <input class="w-full" disabled value="Nomor KTP : {{$data->no_ktp}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-3 col-start-1">--}}
{{--            <input class="w-full" disabled value="Tahun bergabung NPC : {{$data->tahun_bergabung_npc}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <input class="w-full" disabled value="NPCI Kota Kabupaten : {{$data->npci_kota_kabupaten}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <input class="w-full" disabled value="NPCI Provinsi : {{$data->npci_provinsi}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-3 col-start-1">--}}
{{--            <input class="w-full" disabled value="Link Kartu Keluarga : {{$data->link_kartu_keluarga}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-3">--}}
{{--            <input class="w-full" disabled value="Link KTP : {{$data->link_ktp}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-3">--}}
{{--            <input class="w-full" disabled value="Link pas Foto : {{$data->link_pas_foto}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <input class="w-full" disabled value="No Handphone : {{$data->no_handphone}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-3 col-start-1">--}}
{{--            <label>Email Aktif</label>--}}
{{--            <input class="w-full" disabled value="Email Aktif : {{$data->email_aktif}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Tempat Lahir</label>--}}
{{--            <input class="w-full" disabled value="Tempat Lahir : {{$data->tempat_lahir}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <input class="w-full" disabled value="Tanggal Lahir : {{$data->tanggal_lahir}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Agama</label>--}}
{{--            <input class="w-full" disabled value="Agama : {{$data->agama}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Status pernikahan</label>--}}
{{--            <input class="w-full" disabled value="Status pernikahan : {{$data->status_pernikahan}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 pt-20 col-start-1">--}}
{{--            <label>Jenis Kelamin</label>--}}
{{--            <input class="w-full" disabled value="Jenis Kelamin : {{$data->jenis_kelamin}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1 col-start-1">--}}
{{--            <label>Pekerjaan</label>--}}
{{--            <input class="w-full" disabled value="pekerjaan">--}}
{{--        </div>--}}
{{--        <div class="col-span-3 col-start-1">--}}
{{--            <label>Alamat</label>--}}
{{--            <textarea class="w-full" disabled value="Alamat : {{$data->alamat}}"></textarea>--}}
{{--        </div>--}}
{{--        <div class="col-span-1">--}}
{{--            <label>RT / RW</label>--}}
{{--            <input class="w-full" disabled value="RT / RW : {{$data->rt_rw}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Alamat Kecamatan</label>--}}
{{--            <input class="w-full" disabled value="Alamat Kecamatan : {{$data->alamat_kecamatan}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Alamat Kabupaten</label>--}}
{{--            <input class="w-full" disabled value="Alamat Kabupaten : {{$data->alamat_kabupaten}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Alamat Provinsi</label>--}}
{{--            <input class="w-full" disabled value="Alamat Provinsi : {{$data->alamat_provinsi}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Alamat Kode Pos</label>--}}
{{--            <input class="w-full" disabled value="Alamat Kode Pos : {{$data->alamat_kode_pos}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1 col-start-1">--}}
{{--            <label>Hobi</label>--}}
{{--            <input class="w-full" disabled value="Hobi : {{$data->hobi}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1 col-start-1">--}}
{{--            <label>Tinggi Badan</label>--}}
{{--            <input class="w-full" disabled value="Tinggi Badan : {{$data->tinggi_badan}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1">--}}
{{--            <label>Berat Badan</label>--}}
{{--            <input class="w-full" disabled value="Berat Badan : {{$data->berat_badan}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1 col-start-1">--}}
{{--            <label>Ukuran Baju</label>--}}
{{--            <input class="w-full" disabled value="Ukuran Baju : {{$data->ukuran_baju}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1">--}}
{{--            <label>Ukuran Celana</label>--}}
{{--            <input class="w-full" disabled value="Ukuran Celana : {{$data->ukuran_celana}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1">--}}
{{--            <label>Ukuran Sepatu</label>--}}
{{--            <input class="w-full" disabled value="Ukuran Sepatu : {{$data->ukuran_sepatu}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1 col-start-1">--}}
{{--            <label>Golongan Darah</label>--}}
{{--            <input class="w-full" disabled value="Golongan Darah : {{$data->gol_darah}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Tanggal Terbit Passport</label>--}}
{{--            <input class="w-full" disabled value="Tanggal Terbit Passport : {{$data->passport_tgl_terbit}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Tanggal Kadaluarsa Passport</label>--}}
{{--            <input class="w-full" disabled value="Tanggal Kadaluarsa Passport : {{$data->passport_tgl_kadaluarsa}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1 col-start-1">--}}
{{--            <label>Nomor NPWP</label>--}}
{{--            <input class="w-full" disabled value="Nomor NPWP : {{$data->no_npwp}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Pendidikan SD</label>--}}
{{--            <input class="w-full" disabled value="Pendidikan SD : {{$data->pendidikan_sd}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1">--}}
{{--            <label>Tahun Lulus SD</label>--}}
{{--            <input class="w-full" disabled value="Tahun Lulus SD : {{$data->tahun_lulus_sd}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Pendidikan SMP</label>--}}
{{--            <input class="w-full" disabled value="Pendidikan SMP : {{$data->pendidikan_smp}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1">--}}
{{--            <label>Tahun Lulus SMP</label>--}}
{{--            <input class="w-full" disabled value="Tahun Lulus SMP : {{$data->tahun_lulus_smp}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Pendidikan SMA</label>--}}
{{--            <input class="w-full" disabled value="Pendidikan SMA : {{$data->pendidikan_sma}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1">--}}
{{--            <label>Tahun Lulus SMA</label>--}}
{{--            <input class="w-full" disabled value="Tahun Lulus SMA : {{$data->tahun_lulus_sma}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Pendidikan Perguruan Tinggi</label>--}}
{{--            <input class="w-full" disabled value="Pendidikan perguruan Tinggi : {{$data->pendidikan_kuliah}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Jurusan Kuliah</label>--}}
{{--            <input class="w-full" disabled value="Jurusan Kuliah : {{$data->jurusan_kuliah}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Periode Kuliah</label>--}}
{{--            <input class="w-full" disabled value="Periode Kuliah : {{$data->periode_kuliah}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 pt-14 col-start-1">--}}
{{--            <label>Cabang Olahraga</label>--}}
{{--            <input class="w-full" disabled value="Cabang Olahraga : {{$data->cabang_olahraga}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Kelas Klasifikasi Cabor</label>--}}
{{--            <input class="w-full" disabled value="Kelas Klasifikasi Cabor : {{$data->kelas_klasifikasi_cabor}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Status Klasifikasi</label>--}}
{{--            <input class="w-full" disabled value="Status Klasifikasi : {{$data->status_klasifikasi}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-1 col-start-1">--}}
{{--            <label>Status Prestasi Atlet</label>--}}
{{--            <input class="w-full" disabled value="Status Prestasi Atlet : {{$data->status_prestasi_atlet}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Riwayat Klasifikasi</label>--}}
{{--            <input class="w-full" disabled value="Riwayat Klasifikasi : {{$data->riwayat_klasifikasi}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Tahun Klasifikasi</label>--}}
{{--            <input class="w-full" disabled value="Tahun Klasifikasi : {{$data->tahun_klasifikasi}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Riwayat Kesehatan / Cedera</label>--}}
{{--            <input class="w-full" disabled value="Riwayat Kesehatan / Cedera : {{$data->riwayat_kesehatan_cedera}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Tahun Checkup</label>--}}
{{--            <input class="w-full" disabled value="Tahun Checkup : {{$data->tahun_checkup}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Vaksin Cov-19</label>--}}
{{--            <input class="w-full" disabled value="Vaksin Cov-19{{$data->vaksin_cov19}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Tanggal Vaksin ke-2</label>--}}
{{--            <input class="w-full" disabled value="Tanggal Vaksin ke-2 : {{$data->tgl_vaksin_kedua}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2 col-start-1">--}}
{{--            <label>Riwayat Disabilitas</label>--}}
{{--            <input class="w-full" disabled value="Riwayat Disabilitas : {{$data->riwayat_disabilitas}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Alat Bantu Disabilitas</label>--}}
{{--            <input class="w-full" disabled value="Alat Bantu Disabilitas : {{$data->alat_bantu_disabilitas}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-2">--}}
{{--            <label>Jenis Disabilitas</label>--}}
{{--            <input class="w-full" disabled value="Jenis Disabilitas : {{$data->jenis_disabilitas}}">--}}
{{--        </div>--}}
{{--        <div class="col-span-3 py-10">--}}
{{--            <label>Riwayat Prestasi Terbaik (Single Event)</label>--}}
{{--            <table class="table-auto border-2 border-black w-full">--}}
{{--                <thead>--}}
{{--                    <tr class="font-bold text-center">--}}
{{--                        <th class="border border-black">Ajang / Event</th>--}}
{{--                        <th class="border border-black">Nomor Pertandingan yang diikuti</th>--}}
{{--                        <th class="border border-black">Tahun</th>--}}
{{--                        <th class="border border-black">Tempat</th>--}}
{{--                    </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                    @foreach($single_event as $item)--}}
{{--                        <tr>--}}
{{--                            <td class="px-1">{{$item->single_event_terbaik_ajang}}</td>--}}
{{--                            <td class="px-1">{{$item->single_event_terbaik_no_pertandingan}}</td>--}}
{{--                            <td class="px-1">{{$item->single_event_terbaik_tahun}}</td>--}}
{{--                            <td class="px-1">{{$item->single_event_terbaik_tempat}}</td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--        <div class="col-span-3 py-10">--}}
{{--            <label>Riwayat Prestasi Terbaik (Single Event)</label>--}}
{{--            <table class="table-auto border-2 border-black w-full">--}}
{{--                <thead>--}}
{{--                <tr class="font-bold text-center">--}}
{{--                    <th class="border border-black">Ajang / Event</th>--}}
{{--                    <th class="border border-black">Nomor Pertandingan yang diikuti</th>--}}
{{--                    <th class="border border-black">Tahun</th>--}}
{{--                    <th class="border border-black">Tempat</th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                    @foreach($multi_event as $item)--}}
{{--                        <tr class="border border-black">--}}
{{--                            <td class="px-1">{{$item->multi_event_terbaik_ajang}}</td>--}}
{{--                            <td class="px-1">{{$item->multi_event_terbaik_no_pertandingan}}</td>--}}
{{--                            <td class="px-1">{{$item->multi_event_terbaik_tahun}}</td>--}}
{{--                            <td class="px-1">{{$item->multi_event_terbaik_tempat}}</td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    </div>--}}
</body>
</html>
<script>
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            window.print()
        }
    };
</script>
