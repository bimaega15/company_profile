<?php

namespace App\Http\Controllers;

use App\Models\VisitBrowser;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $totalKunjungan = VisitBrowser::whereDate('tanggal_visitbrowsers', $today)->count();
        return view('one.dashboard', compact('totalKunjungan'));
    }
}
