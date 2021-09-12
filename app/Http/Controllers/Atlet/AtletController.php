<?php

namespace App\Http\Controllers\Atlet;

use App\Imports\AtletImport;
use App\Exports\AtletExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Atlet;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Atlet\Data\AtletController as DataController;

use Session;

class AtletController extends Controller
{
    public function __construct(Request $request, DataController $data)
    {
        $this->middleware('auth');
        $this->data = $data;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atlet = $this->data->get_data();

        $data = compact('atlet');

        return view('atlet/index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atlet/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($this->data->store_data($request)) {
            return redirect()->route('atlet.add')->with('success', 'sukses');
        }
        return redirect()->back()->with('error', 'gagal');
    }

    public function export(Request $request)
    {
//        return Excel::import([AtletImport::class, 'SingleEventExport'], public_path('/DataAtlet/atlet.xlsx'));;
//        return Atlet::all();
        return Excel::download(new AtletExport, 'export.xlsx');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
