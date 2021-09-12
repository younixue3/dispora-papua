<?php

namespace App\Imports;

use App\Models\MultiEvent;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

use Session;

class MultiEventImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'Sheet2' => new Sheet2(),
        ];
    }
}
