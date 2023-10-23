<?php

namespace Modules\Media\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Media\Http\Requests\CreatePostBannerSliderRequest;
use App\Models\BannerSlider;
use App\Models\Gallery;
use App\Models\Video;
use DataTables;
use Illuminate\Support\Facades\Config;


class BannerSliderController extends Controller
{
    public $jenisdata_bannerslider;
    public $jenis_bannerslider;
    public function __construct()
    {
        $this->jenisdata_bannerslider = Config::get('datastatis.jenisdata_bannerslider');
        $this->jenis_bannerslider = Config::get('datastatis.jenis_bannerslider');
    }


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
        $jenisDataSlider = $this->jenisdata_bannerslider;
        $jenisBannerSlider = $this->jenis_bannerslider;
        return view('media::bannerSlider.form', [
            'jenisDataSlider' => $jenisDataSlider,
            'jenisBannerSlider' => $jenisBannerSlider,
        ]);
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

    public function select2Gambar(Request $request)
    {
        $search = $request->input('search');
        $limit = 10;
        $page = $request->input('page');
        $endPage = $page * $limit;
        $firstPage = $endPage - $limit;

        $gallery = Gallery::select('*');
        $countGallery = Gallery::all()->count();
        if ($search != null) {
            $gallery->where('judul_gallery', 'like', '%' . $search . '%')
                ->orWhere('keterangan_gallery', 'like', '%' . $search . '%')
                ->orWhere('gambar_gallery', 'like', '%' . $search . '%');
        }
        $gallery = $gallery->offset($firstPage)
            ->limit($limit)
            ->get();

        if ($search != null && $search != '') {
            $countGallery = $gallery->count();
        }

        $result = [];
        foreach ($gallery as $key => $v_Gallery) {
            $result['results'][] =
                [
                    'id' => $v_Gallery->id,
                    'text' => $v_Gallery->judul_gallery . ' | ' . $v_Gallery->gambar_gallery,
                ];
        }
        $result['count_filtered'] = $countGallery;
        return response()->json($result, 200);
    }

    public function select2Video(Request $request)
    {
        $search = $request->input('search');
        $limit = 10;
        $page = $request->input('page');
        $endPage = $page * $limit;
        $firstPage = $endPage - $limit;

        $video = Video::select('*');
        $countVideo = Video::all()->count();
        if ($search != null) {
            $video->where('judul_video', 'like', '%' . $search . '%')
                ->orWhere('keterangan_videos', 'like', '%' . $search . '%')
                ->orWhere('file_videos', 'like', '%' . $search . '%');
        }
        $video = $video->offset($firstPage)
            ->limit($limit)
            ->get();

        if ($search != null && $search != '') {
            $countVideo = $video->count();
        }

        $result = [];
        foreach ($video as $key => $v_video) {
            $result['results'][] =
                [
                    'id' => $v_video->id,
                    'text' => $v_video->file_videos . ' | ' . $v_video->file_videos,
                ];
        }
        $result['count_filtered'] = $countVideo;
        return response()->json($result, 200);
    }
}
