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
    <div class="grid grid-cols-6 p-10 gap-x-5">
        <div class="col-span-3 col-start-1">
            <label>Nama Lengkap</label>
            <input class="border border-black w-full" disabled value="{{$data->nama_lengkap}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Nomor Kartu Keluarga</label>
            <input class="border border-black w-full" disabled value="{{$data->no_kartu_keluarga}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Nomor KTP</label>
            <input class="border border-black w-full" disabled value="{{$data->no_ktp}}">
        </div>
        <div class="col-span-3 col-start-1">
            <label>Tahun bergabung NPC</label>
            <input class="border border-black w-full" disabled value="{{$data->tahun_bergabung_npc}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>NPCI Kota Kabupaten</label>
            <input class="border border-black w-full" disabled value="{{$data->npci_kota_kabupaten}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>NPCI Provinsi</label>
            <input class="border border-black w-full" disabled value="{{$data->npci_provinsi}}">
        </div>
        <div class="col-span-3 col-start-1">
            <label>Link Kartu Keluarga</label>
            <input class="border border-black w-full" disabled value="{{$data->link_kartu_keluarga}}">
        </div>
        <div class="col-span-3">
            <label>Link KTP</label>
            <input class="border border-black w-full" disabled value="{{$data->link_ktp}}">
        </div>
        <div class="col-span-3">
            <label>Link pas Foto</label>
            <input class="border border-black w-full" disabled value="{{$data->link_pas_foto}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>No Handphone</label>
            <input class="border border-black w-full" disabled value="{{$data->no_handphone}}">
        </div>
        <div class="col-span-3 col-start-1">
            <label>Email Aktif</label>
            <input class="border border-black w-full" disabled value="{{$data->email_aktif}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Tempat Lahir</label>
            <input class="border border-black w-full" disabled value="{{$data->tempat_lahir}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Tanggal Lahir</label>
            <input class="border border-black w-full" disabled value="{{$data->tanggal_lahir}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Agama</label>
            <input class="border border-black w-full" disabled value="{{$data->agama}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Status pernikahan</label>
            <input class="border border-black w-full" disabled value="{{$data->status_pernikahan}}">
        </div>
        <div class="col-span-2 pt-20 col-start-1">
            <label>Jenis Kelamin</label>
            <input class="border border-black w-full" disabled value="{{$data->jenis_kelamin}}">
        </div>
        <div class="col-span-1 col-start-1">
            <label>Pekerjaan</label>
            <input class="border border-black w-full" disabled value="pekerjaan">
        </div>
        <div class="col-span-3 col-start-1">
            <label>Alamat</label>
            <textarea class="border border-black w-full" disabled value="{{$data->alamat}}"></textarea>
        </div>
        <div class="col-span-1">
            <label>RT / RW</label>
            <input class="border border-black w-full" disabled value="{{$data->rt_rw}}">
        </div>
        <div class="col-span-2">
            <label>Alamat Kecamatan</label>
            <input class="border border-black w-full" disabled value="{{$data->alamat_kecamatan}}">
        </div>
        <div class="col-span-2">
            <label>Alamat Kabupaten</label>
            <input class="border border-black w-full" disabled value="{{$data->alamat_kabupaten}}">
        </div>
        <div class="col-span-2">
            <label>Alamat Provinsi</label>
            <input class="border border-black w-full" disabled value="{{$data->alamat_provinsi}}">
        </div>
        <div class="col-span-2">
            <label>Alamat Kode Pos</label>
            <input class="border border-black w-full" disabled value="{{$data->alamat_kode_pos}}">
        </div>
        <div class="col-span-1 col-start-1">
            <label>Hobi</label>
            <input class="border border-black w-full" disabled value="{{$data->hobi}}">
        </div>
        <div class="col-span-1 col-start-1">
            <label>Tinggi Badan</label>
            <input class="border border-black w-full" disabled value="{{$data->tinggi_badan}}">
        </div>
        <div class="col-span-1">
            <label>Berat Badan</label>
            <input class="border border-black w-full" disabled value="{{$data->berat_badan}}">
        </div>
        <div class="col-span-1 col-start-1">
            <label>Ukuran Baju</label>
            <input class="border border-black w-full" disabled value="{{$data->ukuran_baju}}">
        </div>
        <div class="col-span-1">
            <label>Ukuran Celana</label>
            <input class="border border-black w-full" disabled value="{{$data->ukuran_celana}}">
        </div>
        <div class="col-span-1">
            <label>Ukuran Sepatu</label>
            <input class="border border-black w-full" disabled value="{{$data->ukuran_sepatu}}">
        </div>
        <div class="col-span-1 col-start-1">
            <label>Golongan Darah</label>
            <input class="border border-black w-full" disabled value="{{$data->gol_darah}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Tanggal Terbit Passport</label>
            <input class="border border-black w-full" disabled value="{{$data->passport_tgl_terbit}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Tanggal Kadaluarsa Passport</label>
            <input class="border border-black w-full" disabled value="{{$data->passport_tgl_kadaluarsa}}">
        </div>
        <div class="col-span-1 col-start-1">
            <label>Nomor NPWP</label>
            <input class="border border-black w-full" disabled value="{{$data->no_npwp}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Pendidikan SD</label>
            <input class="border border-black w-full" disabled value="{{$data->pendidikan_sd}}">
        </div>
        <div class="col-span-1">
            <label>Tahun Lulus SD</label>
            <input class="border border-black w-full" disabled value="{{$data->tahun_lulus_sd}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Pendidikan SMP</label>
            <input class="border border-black w-full" disabled value="{{$data->pendidikan_smp}}">
        </div>
        <div class="col-span-1">
            <label>Tahun Lulus SMP</label>
            <input class="border border-black w-full" disabled value="{{$data->tahun_lulus_smp}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Pendidikan SMA</label>
            <input class="border border-black w-full" disabled value="{{$data->pendidikan_sma}}">
        </div>
        <div class="col-span-1">
            <label>Tahun Lulus SMA</label>
            <input class="border border-black w-full" disabled value="{{$data->tahun_lulus_sma}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Pendidikan Perguruan Tinggi</label>
            <input class="border border-black w-full" disabled value="{{$data->pendidikan_kuliah}}">
        </div>
        <div class="col-span-2">
            <label>Jurusan Kuliah</label>
            <input class="border border-black w-full" disabled value="{{$data->jurusan_kuliah}}">
        </div>
        <div class="col-span-2">
            <label>Periode Kuliah</label>
            <input class="border border-black w-full" disabled value="{{$data->periode_kuliah}}">
        </div>
        <div class="col-span-2 pt-14 col-start-1">
            <label>Cabang Olahraga</label>
            <input class="border border-black w-full" disabled value="{{$data->cabang_olahraga}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Kelas Klasifikasi Cabor</label>
            <input class="border border-black w-full" disabled value="{{$data->kelas_klasifikasi_cabor}}">
        </div>
        <div class="col-span-2">
            <label>Status Klasifikasi</label>
            <input class="border border-black w-full" disabled value="{{$data->status_klasifikasi}}">
        </div>
        <div class="col-span-1 col-start-1">
            <label>Status Prestasi Atlet</label>
            <input class="border border-black w-full" disabled value="{{$data->status_prestasi_atlet}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Riwayat Klasifikasi</label>
            <input class="border border-black w-full" disabled value="{{$data->riwayat_klasifikasi}}">
        </div>
        <div class="col-span-2">
            <label>Tahun Klasifikasi</label>
            <input class="border border-black w-full" disabled value="{{$data->tahun_klasifikasi}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Riwayat Kesehatan / Cedera</label>
            <input class="border border-black w-full" disabled value="{{$data->riwayat_kesehatan_cedera}}">
        </div>
        <div class="col-span-2">
            <label>Tahun Checkup</label>
            <input class="border border-black w-full" disabled value="{{$data->tahun_checkup}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Vaksin Cov-19</label>
            <input class="border border-black w-full" disabled value="{{$data->vaksin_cov19}}">
        </div>
        <div class="col-span-2">
            <label>Tanggal Vaksin ke-2</label>
            <input class="border border-black w-full" disabled value="{{$data->tgl_vaksin_kedua}}">
        </div>
        <div class="col-span-2 col-start-1">
            <label>Riwayat Disabilitas</label>
            <input class="border border-black w-full" disabled value="{{$data->riwayat_disabilitas}}">
        </div>
        <div class="col-span-2">
            <label>Alat Bantu Disabilitas</label>
            <input class="border border-black w-full" disabled value="{{$data->alat_bantu_disabilitas}}">
        </div>
        <div class="col-span-2">
            <label>Jenis Disabilitas</label>
            <input class="border border-black w-full" disabled value="{{$data->jenis_disabilitas}}">
        </div>
    </div>
</body>
</html>
<script>
    document.onreadystatechange = () => {
        if (document.readyState === 'complete') {
            window.print()
        }
    };
</script>
