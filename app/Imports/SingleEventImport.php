<?php

namespace App\Imports;

use App\Models\SingleEvent;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

use Session;

class SingleEventImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            0 => new Sheet3(),
            1 => new Sheet1(),
            2 => new Sheet2(),
        ];
    }
}
