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
        $atlet = Atlet::get()->count();
        $data =  compact('atlet');
        return view('index', $data);
    }

    public function live_statistic()
    {
        $atlet_live = Atlet::where('created_at', 'LIKE' , '%'.today()->format('Y-m-d').'%')->get()->count();
//        dd($atlet_live);
        return $atlet_live;
    }

    public function statistic()
    {
//        dd(today());
        $lastest_item = Statistic::latest()->first();
//        dd($lastest_item->created_at->format('Y-m-d'));
//        dd($lastest_item->created_at->isToday());
        $atler = Atlet::where('created_at', 'LIKE' , '%'.$lastest_item->created_at->format('Y-m-d').'%')->get()->count();
//        dd($atler);
        if ($lastest_item->created_at->isToday()) {
//            dd('tidak simpan');
        } else {
//            dd('simpan');
            Statistic::create([
                'jumlah' => $atler,
                'tanggal' => $lastest_item->created_at
            ]);
        }
//        dd($atler->count());
//        dd(Statistic::orderBy('tanggal', 'DESC')->latest()->limit(5)->get());
        $arr = [
            'past' => Statistic::orderBy('tanggal', 'ASC')->latest()->limit(5)->get(),
        ];
//        $atlet_live = Atlet::where('created_at', 'LIKE' , '%'.today()->format('Y-m-d').'%')->get()->count();
//        dd(array_merge($arr['past'], array($at)));
//        if ($result) {
//
//        }
        return response($arr);
//        dd(json_encode($arr));
////        dd(Carbon::now()->format('d, M Y'));
//        dd($result);
    }
}
