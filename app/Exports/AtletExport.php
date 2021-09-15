<?php

namespace App\Exports;

use App\Models\Atlet;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AtletExport implements FromView
{
    public function view(): View
    {
        return view('atlet/output/export', [
            'atlet' => Atlet::all()
        ]);
    }
}

//class AtletExport implements FromView
//{
//    public function view(): View
//    {
////        dd(Atlet::all());
//        return view('atlet/output/export', [
//            'atlet' => Atlet::all()
//        ]);
//    }
//    public function collection()
//    {
////        dd(request('search'));
//        if(request('search') != 'Semua') {
//            return Atlet::where('npci_kota_kabupaten', 'like', '%'. request('search') .'%')->get();
//        }
//        return Atlet::get();
//    }
//}
