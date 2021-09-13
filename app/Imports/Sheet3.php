<?php

namespace App\Imports;

use App\Models\Atlet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;

use Session;


class Sheet3 implements WithMappedCells, ToModel
{
    public function mapping(): array
    {
        return [
            'nama_lengkap'  => 'D10',
            'no_kartu_keluarga' => 'D12',
            'no_ktp' => 'D14',
            'tahun_bergabung_npc' => 'D16',
            'npci_kota_kabupaten' => 'D18',
            'npci_provinsi' => 'D20',
            'link_kartu_keluarga' => 'F22',
            'link_ktp' => 'F23',
            'link_pas_foto' => 'F24',
            'no_handphone' => 'D26',
            'email_aktif' => 'D28',
            'tempat_lahir' => 'D30',
            'tanggal_lahir' => 'D32',
            'agama' => 'D34',
            'status_pernikahan' => 'D36',
            'jenis_kelamin' => 'D38',
            'pekerjaan' => 'D40',
            'alamat' => 'D43',
            'rt_rw' => 'D45',
            'alamat_kecamatan' => 'D47',
            'alamat_kabupaten' => 'D49',
            'alamat_provinsi' => 'D51',
            'alamat_kode_pos' => 'D53',
            'hobi' => 'D55',
            'tinggi_badan' => 'D57',
            'berat_badan' => 'D59',
            'ukuran_baju' => 'D61',
            'ukuran_celana' => 'D63',
            'ukuran_sepatu' => 'D65',
            'gol_darah' => 'D67',
            'passport_tgl_terbit' => 'F69',
            'passport_tgl_kadaluarsa' => 'F70',
            'no_npwp' => 'D72',
            'pendidikan_sd' => 'D75',
            'tahun_lulus_sd' => 'H75',
            'pendidikan_smp' => 'D77',
            'tahun_lulus_smp' => 'H77',
            'pendidikan_sma' => 'D79',
            'tahun_lulus_sma' => 'H79',
            'pendidikan_kuliah' => 'D81',
            'jurusan_kuliah' => 'G81',
            'periode_kuliah' => 'G82',
            'cabang_olahraga' => 'D85',
            'kelas_klasifikasi_cabor' => 'D87',
            'status_klasifikasi' => 'D89',
            'status_prestasi_atlet' => 'D91',
            'riwayat_klasifikasi' => 'D93',
            'tahun_klasifikasi' => 'G93',
            'riwayat_kesehatan_cedera' => 'D95',
            'tahun_checkup' => 'G95',
            'vaksin_cov19' => 'D97',
            'tgl_vaksin_kedua' => 'G97',
            'riwayat_disabilitas' => 'D99',
            'alat_bantu_disabilitas' => 'D101',
            'jenis_disabilitas' => 'D103',
        ];
    }

    public function model(array $row)
    {
//        dd($row['cabang_olahraga']);
        Session::put('no_ktp', $row['no_ktp']);
        return new Atlet([
            'nama_lengkap' => $row['nama_lengkap'],
            'no_kartu_keluarga' => $row['no_kartu_keluarga'],
            'no_ktp' => $row['no_ktp'],
            'tahun_bergabung_npc' => $row['tahun_bergabung_npc'],
            'npci_kota_kabupaten' => $row['npci_kota_kabupaten'],
            'npci_provinsi' => $row['npci_provinsi'],
            'link_kartu_keluarga' => $row['link_kartu_keluarga'],
            'link_ktp' => $row['link_ktp'],
            'link_pas_foto' => $row['link_pas_foto'],
            'no_handphone' => $row['no_handphone'],
            'email_aktif' => $row['email_aktif'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'agama' => $row['agama'],
            'status_pernikahan' => $row['status_pernikahan'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'pekerjaan' => $row['pekerjaan'],
            'alamat' => $row['alamat'],
            'rt_rw' => $row['rt_rw'],
            'alamat_kecamatan' => $row['alamat_kecamatan'],
            'alamat_kabupaten' => $row['alamat_kabupaten'],
            'alamat_provinsi' => $row['alamat_provinsi'],
            'alamat_kode_pos' => $row['alamat_kode_pos'],
            'hobi' => $row['hobi'],
            'tinggi_badan' => $row['tinggi_badan'],
            'berat_badan' => $row['berat_badan'],
            'ukuran_baju' => $row['ukuran_baju'],
            'ukuran_celana' => $row['ukuran_celana'],
            'ukuran_sepatu' => $row['ukuran_sepatu'],
            'gol_darah' => $row['gol_darah'],
            'passport_tgl_terbit' => $row['passport_tgl_terbit'],
            'passport_tgl_kadaluarsa' => $row['passport_tgl_kadaluarsa'],
            'no_npwp' => $row['no_npwp'],
            'pendidikan_sd' => $row['pendidikan_sd'],
            'tahun_lulus_sd' => $row['tahun_lulus_sd'],
            'pendidikan_smp' => $row['pendidikan_smp'],
            'tahun_lulus_smp' => $row['tahun_lulus_smp'],
            'pendidikan_sma' => $row['pendidikan_sma'],
            'tahun_lulus_sma' => $row['tahun_lulus_sma'],
            'pendidikan_kuliah' => $row['pendidikan_kuliah'],
            'jurusan_kuliah' => $row['jurusan_kuliah'],
            'periode_kuliah' => $row['periode_kuliah'],
            'cabang_olahraga' => $row['cabang_olahraga'],
            'kelas_klasifikasi_cabor' => $row['kelas_klasifikasi_cabor'],
            'status_klasifikasi' => $row['status_klasifikasi'],
            'status_prestasi_atlet' => $row['status_prestasi_atlet'],
            'riwayat_klasifikasi' =>$row[ 'riwayat_klasifikasi'],
            'tahun_klasifikasi' => $row['tahun_klasifikasi'],
            'riwayat_kesehatan_cedera' => $row['riwayat_kesehatan_cedera'],
            'tahun_checkup' => $row['tahun_checkup'],
            'vaksin_cov19' => $row['vaksin_cov19'],
            'tgl_vaksin_kedua' => $row['tgl_vaksin_kedua'],
            'riwayat_disabilitas' => $row['riwayat_disabilitas'],
            'alat_bantu_disabilitas' => $row['alat_bantu_disabilitas'],
            'jenis_disabilitas' => $row['jenis_disabilitas'],
        ]);

    }
}
