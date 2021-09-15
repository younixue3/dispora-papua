<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nama Lengkap</th>
        <th>No Kartu Keluarga</th>
        <th>No Ktp</th>
        <th>Tahun Bergabung NPC</th>
        <th>NPCI Kota Kabupaten</th>
        <th>NPCI Provinsi</th>
        <th>Link Kartu Keluarga</th>
        <th>Link Ktp</th>
        <th>Link Pas Foto</th>
        <th>No Handphone</th>
        <th>Email Aktif</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Status Pernikahan</th>
        <th>Jenis Kelamin</th>
        <th>Pekerjaan</th>
        <th>Alamat</th>
        <th>RT / RW</th>
        <th>Alamat Kecamatan</th>
        <th>Alamat Kabupaten }}</th>
        <th>Alamat Provinsi</th>
        <th>Alamat Kode Pos</th>
        <th>Hobi</th>
        <th>Tinggi Badan</th>
        <th>Berat Badan</th>
        <th>Ukuran Baju</th>
        <th>Ukuran Celana</th>
        <th>Ukuran Sepatu</th>
        <th>Golongan Darah</th>
        <th>Passport tgl terbit</th>
        <th>Passport tgl kadaluarsa</th>
        <th>No NPWP</th>
        <th>pendidikan SD</th>
        <th>Tahun Lulus SD</th>
        <th>Pendidikan SMP</th>
        <th>Tahun Lulus SMP</th>
        <th>Pendidikan SMA</th>
        <th>Tahun Lulus</th>
        <th>Pendidikan Kuliah</th>
        <th>Jurusan Kuliah</th>
        <th>Periode Kuliah</th>
        <th>Cabang Olahraga</th>
        <th>Kelas Klasifikasi Cabor</th>
        <th>Status Klasifikasi</th>
        <th>Status Prestasi Atlet</th>
        <th>Riwayat Klasifikasi</th>
        <th>Tahun Klasifikasi</th>
        <th>Riwayat Kesehatan Cedera</th>
        <th>Tahun Checkup</th>
        <th>Vaksin Cov-19</th>
        <th>Tgl Vaksin Kedua</th>
        <th>Riwayat Disabilitas</th>
        <th>Alat Bantu Disabilitas</th>
        <th>Jenis Disabilitas</th>
        <th>Single Event</th>
        <th>Multi Event</th>
    </tr>
    </thead>
    <tbody>
    @foreach($atlet as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_lengkap }}</td>
            <td>{{ $item->no_kartu_keluarga }}</td>
            <td>{{ $item->no_ktp }}</td>
            <td>{{ $item->tahun_bergabung_npc }}</td>
            <td>{{ $item->npci_kota_kabupaten }}</td>
            <td>{{ $item->npci_provinsi }}</td>
            <td>{{ $item->link_kartu_keluarga }}</td>
            <td>{{ $item->link_ktp }}</td>
            <td>{{ $item->link_pas_foto }}</td>
            <td>{{ $item->no_handphone }}</td>
            <td>{{ $item->email_aktif }}</td>
            <td>{{ $item->tempat_lahir }}</td>
            <td>{{ $item->tanggal_lahir }}</td>
            <td>{{ $item->agama }}</td>
            <td>{{ $item->status_pernikahan }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->pekerjaan }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->rt_rw }}</td>
            <td>{{ $item->alamat_kecamatan }}</td>
            <td>{{ $item->alamat_kabupaten }}</td>
            <td>{{ $item->alamat_provinsi }}</td>
            <td>{{ $item->alamat_kode_pos }}</td>
            <td>{{ $item->hobi }}</td>
            <td>{{ $item->tinggi_badan }}</td>
            <td>{{ $item->berat_badan }}</td>
            <td>{{ $item->ukuran_baju }}</td>
            <td>{{ $item->ukuran_celana }}</td>
            <td>{{ $item->ukuran_sepatu }}</td>
            <td>{{ $item->gol_darah }}</td>
            <td>{{ $item->passport_tgl_terbit }}</td>
            <td>{{ $item->passport_tgl_kadaluarsa }}</td>
            <td>{{ $item->no_npwp }}</td>
            <td>{{ $item->pendidikan_sd }}</td>
            <td>{{ $item->tahun_lulus_sd }}</td>
            <td>{{ $item->pendidikan_smp }}</td>
            <td>{{ $item->tahun_lulus_smp }}</td>
            <td>{{ $item->pendidikan_sma }}</td>
            <td>{{ $item->tahun_lulus_sma }}</td>
            <td>{{ $item->pendidikan_kuliah }}</td>
            <td>{{ $item->jurusan_kuliah }}</td>
            <td>{{ $item->periode_kuliah }}</td>
            <td>{{ $item->cabang_olahraga }}</td>
            <td>{{ $item->kelas_klasifikasi_cabor }}</td>
            <td>{{ $item->status_klasifikasi }}</td>
            <td>{{ $item->status_prestasi_atlet }}</td>
            <td>{{ $item->riwayat_klasifikasi }}</td>
            <td>{{ $item->tahun_klasifikasi }}</td>
            <td>{{ $item->riwayat_kesehatan_cedera }}</td>
            <td>{{ $item->tahun_checkup }}</td>
            <td>{{ $item->vaksin_cov19 }}</td>
            <td>{{ $item->tgl_vaksin_kedua }}</td>
            <td>{{ $item->riwayat_disabilitas }}</td>
            <td>{{ $item->alat_bantu_disabilitas }}</td>
            <td>{{ $item->jenis_disabilitas }}</td>
            <td>{{ $item->single_event }}</td>
            <td>{{ $item->multi_event }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
