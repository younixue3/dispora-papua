<?php

namespace App\Http\Controllers\CabangOlahraga;

use App\Http\Controllers\Controller;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\CabangOlahraga\Data\CabangOlahragaController as DataController;

class CabangOlahragaController extends Controller
{
    public function __construct(DataController $data)
    {
        $this->middleware('auth');
        $this->data = $data;
    }

    public function index(Request $request)
    {
        $cabor = $this->data->get_data($request);
        $data = compact('cabor');
        return view('cabang_olahraga.index', $data);
    }

    public function create()
    {
        return view('cabang_olahraga.add_form');
    }

    public function store(Request $request)
    {
        if ($this->data->store_data($request)) {
            return redirect()->route('cabang_olahraga.index')->with('success', 'sukses');
        }
        return redirect()->back()->with('error', 'gagal');
    }
}
