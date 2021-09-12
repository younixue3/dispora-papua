<?php

namespace App\Exports;

use App\Models\Atlet;
use App\Models\SingleEvent;
use App\Models\MultiEvent;
use Maatwebsite\Excel\Concerns\FromCollection;

class AtletExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
//        dd(Atlet::all());
        return Atlet::all();
    }
}
