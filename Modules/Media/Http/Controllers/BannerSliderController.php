<?php

namespace Modules\Media\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Media\Http\Requests\CreatePostBannerSliderRequest;
use App\Models\BannerSlider;
use DataTables;

class BannerSliderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = BannerSlider::query();
            return DataTables::eloquent($data)
                ->addColumn('aktif_bannerslider', function ($row) {
                    $output = $row->aktif_bannerslider == true ? '<span class="badge bg-blue">Aktif</span>' : '<span class="badge bg-red">Tidak Aktif</span>';
                    return $output;
                })
                ->addColumn('action', function ($row) {
                    $buttonUpdate = '';
                    $buttonUpdate = '
                    <a href="' . route('media.bannerSlider.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    ';
                    $buttonDelete = '';
                    $buttonDelete = '
                    <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('media/bannerSlider/' . $row->id . '?_method=delete') . '">
                        <i class="zmdi zmdi-delete"></i>
                    </button>
                    ';

                    $button = '
                <div class="text-center">
                    ' . $buttonUpdate . '
                    ' . $buttonDelete . '
                </div>
                ';

                    return $button;
                })
                ->rawColumns(['action', 'file_bannerslider', 'aktif_bannerslider'])
                ->toJson();
        }
        return view('media::bannerSlider.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('media::bannerSlider.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostBannerSliderRequest $request)
    {
        //
        $uploadGambarBannerSlider = UtilsHelper::uploadFile($request->file('file_bannerslider'), 'banner_slider', null, 'banner_slider', 'file_bannerslider');
        $data = $request->except(['file_bannerslider']);

        $data = array_merge(
            $data,
            [
                'file_bannerslider' => $uploadGambarBannerSlider,
            ],
        );
        BannerSlider::create($data);
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('media::bannerSlider.form');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $bannerSlider = BannerSlider::find($id);
        return view('media::bannerSlider.form', compact('bannerSlider'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostBannerSliderRequest $request, $id)
    {
        //
        $uploadGambarBannerSlider = UtilsHelper::uploadFile($request->file('file_bannerslider'), 'banner_slider', $id, 'banner_slider', 'file_bannerslider');

        $data = $request->except(['file_bannerslider']);

        $data = array_merge(
            $data,
            [
                'file_bannerslider' => $uploadGambarBannerSlider,
            ],
        );
        BannerSlider::find($id)->update($data);
        return response()->json('Berhasil mengubah data', 200);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        UtilsHelper::deleteFile($id, 'banner_slider', 'banner_slider', 'file_bannerslider');
        BannerSlider::destroy($id);
        return response()->json('Berhasil menghapus data', 200);
    }
}
