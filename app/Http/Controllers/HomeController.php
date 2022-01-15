<?php

namespace App\Http\Controllers;

use App\Models\Atlet;
use App\Models\Statistic;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function statistic()
    {
        $lastest_item = Statistic::latest()->first()->tanggal;
        $result = Carbon::createFromFormat('d, M Y', date('d, M Y', strtotime($lastest_item)))->isPast();
        $atler = Atlet::where('created_at', 'LIKE' , '%'.$lastest_item.'%')->get()->count();
        if ($result) {
            Statistic::create([
                'jumlah' => $atler,
                'tanggal' => $lastest_item
            ]);
        }
//        dd($atler->count());
//        dd(Statistic::orderBy('tanggal', 'ASC')->take(5)->get());
        $arr = [
            'past' => Statistic::orderBy('tanggal', 'ASC')->take(5)->get(),
        ];
//        if ($result) {
//
//        }
        return response($arr);
//        dd(json_encode($arr));
////        dd(Carbon::now()->format('d, M Y'));
//        dd($result);
    }
}
