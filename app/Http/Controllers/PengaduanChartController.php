<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Charts\PengaduanChart;

class PengaduanChartController extends Controller
{
    public function index()
    {
        $chart = new PengaduanChart;
        $labels = DB::select('select status from pengaduan group by status order by status asc');
        $data = DB::select('select count(status) as total from pengaduan group by status order by status asc');

        // Declare variable
        $x=[]; $y=[]; $colors=[];

        // Merapihkan array untuk label dan warna chart
        foreach ($labels as $label) {
            array_push($x, ucwords($label->status));
            if ($label->status == 'ditolak') {
                array_push($colors, 'red');
            }elseif ($label->status == 'dibatalkan') {
                array_push($colors, 'orange');
            }elseif ($label->status == 'selesai') {
                array_push($colors, 'green');
            }elseif ($label->status == 'proses') {
                array_push($colors, 'yellow');
            }elseif ($label->status == 'terkirim') {
                array_push($colors, 'blue');
            }
        }
        // Merapihkan array untuk value chart
        foreach ($data as $value) {
            array_push($y,$value->total);
        }

        $chart->labels($x);
        $chart->dataset('Laporan Pegaduan', 'bar', $y)->backgroundColor($colors);

        return view('pengaduan.laporan', compact('chart'));
    }

}
