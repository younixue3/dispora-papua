<?php

namespace App\Http\Controllers\Atlet\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

use App\Models\Atlet;
use App\Imports\AtletImport;
use App\Imports\MultiEventImport;
use App\Imports\SingleEventImport;
use Maatwebsite\Excel\Facades\Excel;

class AtletController extends Controller
{
    public function get_data()
    {
        $data = Atlet::latest();

        if(request('search')) {
            $data->orWhere('no_ktp', request('search'))
                ->orWhere('npci_kota_kabupaten', 'like', '%'.request('search').'%')
                ->orWhere('npci_provinsi', 'like', '%'.request('search').'%')
                ->orWhere('nama_lengkap', 'like', '%'.request('search').'%');
        }

        return $data->paginate(10);
    }

    public function store_data(Request $request)
    {
        $file = $request->file('file');
        $file->move('DataAtlet', 'coba.xlsx');
        return Excel::import(new SingleEventImport, public_path('/DataAtlet/coba.xlsx'));
    }

    public function export_data(Request $request)
    {
    }
}
