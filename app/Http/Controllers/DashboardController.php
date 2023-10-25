<?php

namespace App\Http\Controllers;

use App\Models\VisitBrowser;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $ip = $request->ip();
        $getLocation = geoip()->getLocation('182.1.51.26');
        
        $today = Carbon::today();
        $totalKunjungan = VisitBrowser::whereDate('tanggal_visitbrowsers', $today)->count();
        return view('one.dashboard', compact('totalKunjungan'));
    }
}
