<?php

namespace App\Imports;

use App\Models\MultiEvent;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

use Session;

class Sheet2 implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
//        dd($row);
        $row['no_ktp'] = Session::get('no_ktp');
//        dd($row);
        return new MultiEvent([
            'multi_event_terbaik_ajang' => $row['ajang_event'],
            'multi_event_terbaik_no_pertandingan' => $row['nomor_pertandingan_yang_diikuti'],
            'multi_event_terbaik_tahun' => $row['tahun'],
            'multi_event_terbaik_tempat' => $row['tempat'],
            'atlet_id' => $row['no_ktp']
        ]);
    }
}
