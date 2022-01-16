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
        $atlet_today = Atlet::where('created_at', 'LIKE' , '%'.today()->format('Y-m-d').'%')->get()->count();
        $data =  compact('atlet', 'atlet_today');
        return view('index', $data);
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

        } else {
            Statistic::create([
                'jumlah' => $atler,
                'tanggal' => $lastest_item->tanggal
            ]);
        }
//        dd($atler->count());
//        dd(Statistic::orderBy('tanggal', 'DESC')->latest()->limit(5)->get());
        $arr = [
            'past' => Statistic::orderBy('tanggal', 'ASC')->latest()->limit(5)->get(),
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
