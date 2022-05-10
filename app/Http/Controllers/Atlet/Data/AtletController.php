<?php

namespace App\Http\Controllers\Atlet\Data;

use App\Http\Controllers\Controller;
use App\Models\CabangOlahraga;
use Illuminate\Http\Request;

use Session, Storage;

use App\Models\Atlet;
use App\Models\MultiEvent;
use App\Models\SingleEvent;
use App\Imports\AtletImport;
use App\Imports\MultiEventImport;
use App\Imports\SingleEventImport;
use Maatwebsite\Excel\Facades\Excel;

class AtletController extends Controller
{
    public function get_data(Request $request)
    {
        $data = Atlet::latest();
        $paginate = 10;
        if(request('limit')) {
            $paginate = $request->limit;
        }
        if(request('search')) {
            $data->orWhere('no_ktp', request('search'))
                ->orWhere('npci_kota_kabupaten', 'like', '%'.request('search').'%')
                ->orWhere('npci_provinsi', 'like', '%'.request('search').'%')
                ->orWhere('nama_lengkap', 'like', '%'.request('search').'%');
        }

        return $data->paginate($paginate);
    }

    public function store_data(Request $request)
    {
        $file = $request->file('file');
        $file->move('DataAtlet', 'coba.xlsx');
        return Excel::import(new SingleEventImport, public_path('/DataAtlet/coba.xlsx'));
    }

    public function form_store_data(Request $request)
    {
//        return response($request);
        $atlet = Atlet::create([
            'nama_lengkap' => $request->nama_lengkap,
            'no_kartu_keluarga' => $request->no_kartu_keluarga,
            'no_ktp' => $request->no_ktp,
            'tahun_bergabung_npc' => $request->tahun_npc,
            'npci_kota_kabupaten' => $request->npci_kota_kab,
            'npci_provinsi' => $request->npci_provinsi,
            'link_kartu_keluarga' => $request->kartu_keluarga,
            'link_ktp' => $request->ktp,
            'link_pas_foto' => $request->pas_foto,
            'no_handphone' => $request->no_hp,
            'email_aktif' => $request->email,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'status_pernikahan' => $request->pernikahan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'rt_rw' => $request->rt_rw,
            'alamat_kecamatan' => $request->kecamatan,
            'alamat_kabupaten' => $request->kabupaten,
            'alamat_provinsi' => $request->provinsi,
            'alamat_kode_pos' => $request->kode_pos,
            'hobi' => $request->hobi,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'ukuran_baju' => $request->ukuran_baju,
            'ukuran_celana' => $request->ukuran_celana,
            'ukuran_sepatu' => $request->ukuran_sepatu,
            'gol_darah' => $request->gol_darah,
            'passport_tgl_terbit' => $request->passport_terbit,
            'passport_tgl_kadaluarsa' => $request->passport_kadaluwarsa,
            'no_npwp' => $request->no_npwp,
            'pendidikan_sd' => $request->pendidikan_sd,
            'tahun_lulus_sd' => $request->tahun_lulus_sd,
            'pendidikan_smp' => $request->pendidikan_smp,
            'tahun_lulus_smp' => $request->tahun_lulus_smp,
            'pendidikan_sma' => $request->pendidikan_sma,
            'tahun_lulus_sma' => $request->tahun_lulus_sma,
            'pendidikan_kuliah' => $request->pendidikan_kuliah,
            'jurusan_kuliah' => $request->jurusan_kuliah,
            'periode_kuliah' => $request->periode_kuliah,
            'cabang_olahraga' => $request->cabor,
            'kelas_klasifikasi_cabor' => $request->kelas_klasifikasi_cabor,
            'status_klasifikasi' => $request->status_klasifikasi,
            'status_prestasi_atlet' => $request->status_prestasi_atlet,
            'riwayat_klasifikasi' => $request->riwayat_klasifikasi,
            'tahun_klasifikasi' => $request->tahun_klasifikasi,
            'riwayat_kesehatan_cedera' => $request->riwayat_kesehatan_cedera,
            'tahun_checkup' => $request->tahun_checkup,
            'vaksin_cov19' => $request->vaksin_covid,
            'tgl_vaksin_kedua' => $request->tgl_vaksin_kedua,
            'riwayat_disabilitas' => $request->riwayat_disabilitas,
            'alat_bantu_disabilitas' => $request->alat_bantu_disabilitas,
            'jenis_disabilitas' => $request->jenis_disabilitas,
        ]);
        return $atlet->id;
    }

    public function form_store_sevent_data(Request $request)
    {
//        return response($request);
        foreach ($request->data['sevent'] as $key => $value) {
            SingleEvent::create([
                'single_event_terbaik_ajang' => $value['nama'],
                'single_event_terbaik_no_pertandingan' => $value['nomor_pertandingan'],
                'single_event_terbaik_tahun' => $value['tahun'],
                'single_event_terbaik_tempat' => $value['tempat'],
                'atlet_id' => intval($request->data['atlet'])
            ]);
        }
    }

    public function form_store_mevent_data(Request $request)
    {
        foreach ($request->data['mevent'] as $key => $value) {
            MultiEvent::create([
                'multi_event_terbaik_ajang' => $value['nama'],
                'multi_event_terbaik_no_pertandingan' => $value['nomor_pertandingan'],
                'multi_event_terbaik_tahun' => $value['tahun'],
                'multi_event_terbaik_tempat' => $value['tempat'],
                'atlet_id' => intval($request->data['atlet'])
            ]);
        }
    }

    public function get_show_data($id)
    {
        $data = Atlet::findOrFail($id);
        return $data;
    }

    public function get_single_event_data($ktp)
    {
//        dd($ktp);
        $data = SingleEvent::where('atlet_id', $ktp)->get();
//        dd($data);
        return $data;
    }

    public function get_multi_event_data($ktp)
    {
        $data = MultiEvent::where('atlet_id', $ktp)->get();
        return $data;
    }

    public function destroy_data($id)
    {
//        dd($id);
        Atlet::find($id)->delete();
    }

    public function edit_data($id)
    {
//        dd($id);
        $atlet = Atlet::find($id);
        $cabor = CabangOlahraga::get();
        $compact = compact('atlet' , 'cabor');
        return $compact;
    }

    public function update_data($request, $id)
    {
        $atlet = Atlet::find($id)->update([
            'nama_lengkap' => $request->nama_lengkap,
            'no_kartu_keluarga' => $request->no_kartu_keluarga,
            'no_ktp' => $request->no_ktp,
            'tahun_bergabung_npc' => $request->tahun_npc,
            'npci_kota_kabupaten' => $request->npci_kota_kab,
            'npci_provinsi' => $request->npci_provinsi,
            'link_kartu_keluarga' => $request->kartu_keluarga,
            'link_ktp' => $request->ktp,
            'link_pas_foto' => $request->pas_foto,
            'no_handphone' => $request->no_hp,
            'email_aktif' => $request->email,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'status_pernikahan' => $request->pernikahan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'rt_rw' => $request->rt_rw,
            'alamat_kecamatan' => $request->kecamatan,
            'alamat_kabupaten' => $request->kabupaten,
            'alamat_provinsi' => $request->provinsi,
            'alamat_kode_pos' => $request->kode_pos,
            'hobi' => $request->hobi,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'ukuran_baju' => $request->ukuran_baju,
            'ukuran_celana' => $request->ukuran_celana,
            'ukuran_sepatu' => $request->ukuran_sepatu,
            'gol_darah' => $request->gol_darah,
            'passport_tgl_terbit' => $request->passport_terbit,
            'passport_tgl_kadaluarsa' => $request->passport_kadaluwarsa,
            'no_npwp' => $request->no_npwp,
            'pendidikan_sd' => $request->pendidikan_sd,
            'tahun_lulus_sd' => $request->tahun_lulus_sd,
            'pendidikan_smp' => $request->pendidikan_smp,
            'tahun_lulus_smp' => $request->tahun_lulus_smp,
            'pendidikan_sma' => $request->pendidikan_sma,
            'tahun_lulus_sma' => $request->tahun_lulus_sma,
            'pendidikan_kuliah' => $request->pendidikan_kuliah,
            'jurusan_kuliah' => $request->jurusan_kuliah,
            'periode_kuliah' => $request->periode_kuliah,
            'cabang_olahraga' => $request->cabor,
            'kelas_klasifikasi_cabor' => $request->kelas_klasifikasi_cabor,
            'status_klasifikasi' => $request->status_klasifikasi,
            'status_prestasi_atlet' => $request->status_prestasi_atlet,
            'riwayat_klasifikasi' => $request->riwayat_klasifikasi,
            'tahun_klasifikasi' => $request->tahun_klasifikasi,
            'riwayat_kesehatan_cedera' => $request->riwayat_kesehatan_cedera,
            'tahun_checkup' => $request->tahun_checkup,
            'vaksin_cov19' => $request->vaksin_covid,
            'tgl_vaksin_kedua' => $request->tgl_vaksin_kedua,
            'riwayat_disabilitas' => $request->riwayat_disabilitas,
            'alat_bantu_disabilitas' => $request->alat_bantu_disabilitas,
            'jenis_disabilitas' => $request->jenis_disabilitas,
        ]);
    }
}
