<?php

namespace App\Http\Controllers\CabangOlahraga\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CabangOlahraga;

class CabangOlahragaController extends Controller
{
    public function get_data(Request $request)
    {
        $data = CabangOlahraga::latest()->paginate(10);

        return $data;
    }

    public function store_data(Request $request)
    {
//        dd($request);
        $cabor = CabangOlahraga::create([
            'nama' => $request->nama_cabang_olahraga
        ]);
        return $cabor;
    }
}
