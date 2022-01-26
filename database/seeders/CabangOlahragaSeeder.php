<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CabangOlahragaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cabang_olahraga')->insert([
            ['nama' => 'Lempar Lembing'],
            ['nama' => 'Lompat Galah'],
            ['nama' => 'Sepeda'],
            ['nama' => 'Angkat Berat'],
            ['nama' => 'Memanah'],
            ['nama' => 'Renang'],
            ['nama' => 'Lari'],
            ['nama' => 'Basket']
        ]);
    }
}
