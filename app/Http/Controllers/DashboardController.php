<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KirimPesan;
use App\Models\Produk;
use App\Models\VisitBrowser;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $today = Carbon::today();
        $totalKunjungan = VisitBrowser::whereDate('tanggal_visitbrowsers', $today)->count();

        $browserCounts = VisitBrowser::select('browser_visitbrowsers', DB::raw('COUNT(*) as jumlah_browservisitbrowsers'))
            ->groupBy('browser_visitbrowsers')
            ->orderBy('browser_visitbrowsers')
            ->get();

        $color = [];
        foreach ($browserCounts as $key => $value) {
            $color[] = "#" . substr(md5($key), 0, 6);
        }


        if ($request->ajax()) {
            if ($request->input('xhr') == 'donut_grafik') {
                $count = VisitBrowser::select('browser_visitbrowsers')
                    ->orderBy('browser_visitbrowsers')
                    ->get()->count();

                $dataBrowser = [];
                foreach ($browserCounts as $key => $value) {
                    $jumlah_pengunjung = ($value->jumlah_browservisitbrowsers / $count) * 100;
                    $jumlah_pengunjung = number_format($jumlah_pengunjung, 2);
                    $dataBrowser[] = [
                        'label' => $value->browser_visitbrowsers,
                        'value' => $jumlah_pengunjung
                    ];
                }

                return response()->json([
                    'grafik' => $dataBrowser,
                    'color' => $color
                ]);
            }

            if ($request->input('xhr') == 'line_grafik') {
                $groupedDataTanggal = VisitBrowser::selectRaw('DATE(tanggal_visitbrowsers) as period, COUNT(*) as jumlah_data')
                    ->groupBy('period')
                    ->orderBy('period', 'DESC')
                    ->get();
                return response()->json($groupedDataTanggal);
            }
        }
        $countPesan = KirimPesan::all()->count();
        $countBerita = Berita::all()->count();
        $countProduk = Produk::all()->count();
        return view('one.dashboard', compact('totalKunjungan', 'browserCounts', 'color', 'countPesan', 'countBerita', 'countProduk'));
    }
}
