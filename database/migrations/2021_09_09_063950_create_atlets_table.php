<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atlets', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap')->nullable();
            $table->string('no_kartu_keluarga', 40);
            $table->string('no_ktp', 40);
            $table->string('tahun_bergabung_npc');
            $table->string('npci_kota_kabupaten');
            $table->string('npci_provinsi');
            $table->text('link_kartu_keluarga');
            $table->text('link_ktp');
            $table->text('link_pas_foto');
            $table->string('no_handphone', 18);
            $table->string('email_aktif', 30);
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('agama');
            $table->enum('status_pernikahan', ['BELUM MENIKAH', 'MENIKAH', 'CERAI HIDUP', 'CERAI MATI']);
            $table->enum('jenis_kelamin', ['LAKI-LAKI', 'PEREMPUAN']);
            $table->enum('pekerjaan', ['PELAJAR', 'WIRASWASTA', 'PNS', 'SWASTA', 'TIDAK BEKERJA']);
            $table->text('alamat');
            $table->string('rt_rw');
            $table->string('alamat_kecamatan');
            $table->string('alamat_kabupaten');
            $table->string('alamat_provinsi');
            $table->string('alamat_kode_pos');
            $table->string('hobi');
            $table->string('tinggi_badan');
            $table->string('berat_badan');
            $table->enum('ukuran_baju', ['S', 'M', 'L', 'XL']);
            $table->enum('ukuran_celana', ['S', 'M', 'L', 'XL']);
            $table->string('ukuran_sepatu');
            $table->enum('gol_darah', ['O', 'A', 'B', 'AB']);
            $table->date('passport_tgl_terbit');
            $table->date('passport_tgl_kadaluarsa');
            $table->string('no_npwp');
            $table->string('pendidikan_sd', 32);
            $table->string('tahun_lulus_sd');
            $table->string('pendidikan_smp', 32);
            $table->string('tahun_lulus_smp', 4);
            $table->string('pendidikan_sma', 32);
            $table->string('tahun_lulus_sma', 4);
            $table->string('pendidikan_kuliah', 32);
            $table->string('jurusan_kuliah', 32);
            $table->string('periode_kuliah', 22);
            $table->string('cabang_olahraga', 20);
            $table->string('kelas_klasifikasi_cabor', 20);
            $table->enum('status_klasifikasi', ['Baru', 'Nasional Review', 'Nasional Confirm', 'Internasional Review', 'Internasional Confirm', 'Tidak Lolos Klasifikasi']);
            $table->enum('status_prestasi_atlet', ['Internasional', 'Regional', 'Nasional', 'Junior']);
            $table->string('riwayat_klasifikasi', 8);
            $table->string('tahun_klasifikasi');
            $table->text('riwayat_kesehatan_cedera');
            $table->string('tahun_checkup');
            $table->enum('vaksin_cov19', ['BELUM VAKSIN', 'SUDAH VAKSIN']);
            $table->date('tgl_vaksin_kedua');
            $table->string('riwayat_disabilitas');
            $table->string('alat_bantu_disabilitas');
            $table->string('jenis_disabilitas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atlets');
    }
}
