<?php

namespace Modules\Website\Http\Controllers;

use App\Models\Berita;
use App\Models\Client;
use App\Models\Produk;
use App\Models\Setting;
use App\Models\TentangKami;
use App\Models\TentangKamiDetail;
use App\Models\Testimoni;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $client = Client::all();
        $aboutUs = TentangKami::first();
        $testimoni = Testimoni::all();
        $aboutUsDetail = TentangKamiDetail::where('tentang_kami_id', $aboutUs->id)
            ->where('is_active', 1)
            ->limit(3)
            ->get();
        $blogs = Berita::limit(3)
            ->orderBy('tanggalpublish_berita', 'desc')
            ->get();
        $setting = Setting::first();

        return view('website::index', [
            'client' => $client,
            'aboutUs' => $aboutUs,
            'testimoni' => $testimoni,
            'aboutUsDetail' => $aboutUsDetail,
            'blogs' => $blogs,
            'setting' => $setting
        ]);
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
        return view('website::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('website::edit');
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
}
