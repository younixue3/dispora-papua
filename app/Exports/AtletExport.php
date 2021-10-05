<?php

namespace App\Exports;

use App\Models\Atlet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AtletExport implements FromView
{
    public function view(): View
    {
        if(request('search') != 'Semua') {
            return view('atlet/output/export', [
                'atlet' => Atlet::where('npci_kota_kabupaten', 'like', '%'. request('search') .'%')->get()
            ]);
        }

        return view('atlet/output/export', [
            'atlet' => Atlet::all()
        ]);
    }
}
