<?php

namespace App\Imports;

use App\Models\Atlet;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithMappedCells;
use PhpOffice\PhpSpreadsheet\Cell\Cell;
use PhpOffice\PhpSpreadsheet\Cell\DataType;
use Maatwebsite\Excel\Concerns\WithCustomValueBinder;
use PhpOffice\PhpSpreadsheet\Cell\DefaultValueBinder;

class AtletImport extends DefaultValueBinder implements WithMappedCells, ToModel, WithCustomValueBinder
{
    public function bindValue(Cell $cell, $value)
    {
        if (is_numeric($value)) {
            $cell->setValueExplicit($value, DataType::TYPE_STRING);

            return true;
        }

        // else return default behavior
        return parent::bindValue($cell, $value);
    }

    public function mapping(): array
    {
        return [
            'nama_lengkap'  => 'D6',
            'no_kartu_keluarga' => 'D8',
            'no_ktp' => 'D10',
            'tahun_bergabung_npc' => 'D12',
            'npci_kota_kabupaten' => 'D14',
            'npci_provinsi' => 'D16',
            'link_kartu_keluarga' => 'F18',
            'link_ktp' => 'F20',
            'link_pas_foto' => 'F22',
            'no_handphone' => 'D24',
            'email_aktif' => 'D26',
            'tempat_lahir' => 'D28',
            'tanggal_lahir' => 'D30',
            'agama' => 'D32',
            'status_pernikahan' => 'D34',
            'jenis_kelamin' => 'D36',
            'pekerjaan' => 'D38',
            'alamat' => 'D41',
            'rt_rw' => 'D43',
            'alamat_kecamatan' => 'D45',
            'alamat_kabupaten' => 'D47',
            'alamat_provinsi' => 'D49',
            'alamat_kode_pos' => 'D51',
            'hobi' => 'D53',
            'tinggi_badan' => 'D55',
            'berat_badan' => 'D57',
            'ukuran_baju' => 'D59',
            'ukuran_celana' => 'D61',
            'ukuran_sepatu' => 'D63',
            'gol_darah' => 'D65',
            'passport_tgl_terbit' => 'F67',
            'passport_tgl_kadaluarsa' => 'F69',
            'no_npwp' => 'D71',
            'pendidikan_sd' => 'D74',
            'tahun_lulus_sd' => 'H74',
            'pendidikan_smp' => 'D76',
            'tahun_lulus_smp' => 'H76',
            'pendidikan_sma' => 'D78',
            'tahun_lulus_sma' => 'H78',
            'pendidikan_kuliah' => 'D80',
            'jurusan_kuliah' => 'G80',
            'periode_kuliah' => 'G81',
            'cabang_olahraga' => 'D83',
            'kelas_klasifikasi_cabor' => 'D85',
            'status_klasifikasi' => 'D87',
            'status_prestasi_atlet' => 'D89',
            'riwayat_klasifikasi' => 'D91',
            'tahun_klasifikasi' => 'G91',
            'riwayat_kesehatan_cedera' => 'D93',
            'tahun_checkup' => 'G93',
            'vaksin_cov19' => 'D95',
            'tgl_vaksin_kedua' => 'G95',
            'riwayat_disabilitas' => 'D97',
            'alat_bantu_disabilitas' => 'D99',
            'jenis_disabilitas' => 'D101',
        ];
    }

    public function model(array $row)
    {
//        dd(is_numeric($row['no_kartu_keluarga']));
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
