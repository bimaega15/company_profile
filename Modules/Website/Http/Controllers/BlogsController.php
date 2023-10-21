<?php

namespace Modules\Website\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $kategoriBerita = KategoriBerita::all();
        $recentPost = Berita::orderBy('id', 'desc')->limit(3)->get();
        $dates = Berita::select('tanggalpublish_berita')
            ->orderBy('tanggalpublish_berita', 'desc')
            ->get();

        $uniqueMonthsYears = collect($dates)->map(function ($date) {
            $monthYear = $date->tanggalpublish_berita;
            $carbonDate = Carbon::createFromFormat('Y-m-d H:i:s', $monthYear);

            // Daftar nama bulan dalam bahasa Indonesia
            $bulanIndonesia = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];
            $monthIndonesian = $bulanIndonesia[$carbonDate->month - 1];

            return $monthIndonesian . ' ' . $carbonDate->year;
        })->unique()->take(12);
        return view('website::blogs.index', compact('kategoriBerita', 'recentPost', 'uniqueMonthsYears'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('website::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $kategoriBerita = KategoriBerita::all();
        $recentPost = Berita::orderBy('id', 'desc')->limit(3)->get();
        $dates = Berita::select('tanggalpublish_berita')
            ->orderBy('tanggalpublish_berita', 'desc')
            ->get();

        $uniqueMonthsYears = collect($dates)->map(function ($date) {
            $monthYear = $date->tanggalpublish_berita;
            $carbonDate = Carbon::createFromFormat('Y-m-d H:i:s', $monthYear);

            // Daftar nama bulan dalam bahasa Indonesia
            $bulanIndonesia = [
                'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
            ];
            $monthIndonesian = $bulanIndonesia[$carbonDate->month - 1];

            return $monthIndonesian . ' ' . $carbonDate->year;
        })->unique()->take(12);
        $berita = Berita::find($id);
        return view('website::blogs.show', compact('kategoriBerita', 'recentPost', 'uniqueMonthsYears', 'berita'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return response()->json($berita);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function renderBlogs()
    {
        $berita = Berita::paginate(5)->onEachSide(0);
        return view('website::blogs.renderBlogs', compact('berita'));
    }
}
