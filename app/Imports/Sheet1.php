<?php

namespace App\Imports;

use App\Models\SingleEvent;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Session;

class Sheet1 implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
//        dd($row);
        $row['no_ktp'] = Session::get('no_ktp');
//        dd($row);
        return new SingleEvent([
            'single_event_terbaik_ajang' => $row['ajang_event'],
            'single_event_terbaik_no_pertandingan' => $row['nomor_pertandingan_yang_diikuti'],
            'single_event_terbaik_tahun' => $row['tahun'],
            'single_event_terbaik_tempat' => $row['tempat'],
            'atlet_id' => $row['no_ktp']
        ]);
    }
}
