<?php

namespace Modules\Web\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use App\Models\KategoriBerita;
use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Web\Http\Requests\CreatePostBeritaRequest;
use DataTables;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Berita::query()->with('kategoriBerita');
            return DataTables::eloquent($data)
                ->addColumn('video_berita', function ($row) {
                    $poster = asset('upload/postervideoberita/' . $row->postervideo_berita);
                    $output = '
                <video
                id="my-player-' . $row->id . '"
                class="video-js"
                controls
                preload="auto"
                poster="' . $poster . '"
                data-setup="{}"
                data-id="' . $row->id . '"
                style="width: 100%; height: 150px;"
                >
                <source src="' . asset('upload/videoberita/' . $row->video_berita) . '" type="video/mp4"></source>
                <source src="' . asset('upload/videoberita/' . $row->video_berita) . '" type="video/webm"></source>
                <source src="' . asset('upload/videoberita/' . $row->video_berita) . '" type="video/ogg"></source>
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">
                    supports HTML5 video
                    </a>
                </p>
                </video>
                ';

                    return $output;
                })
                ->addColumn('gambar_berita', function ($row) {
                    $output = '
                    <a class="photoviewer" href="' . asset('upload/gambarberita/' . $row->gambar_berita) . '" data-gallery="photoviewer" data-title="' . $row->gambar_berita . '" target="_blank">
                        <img src="' . asset('upload/gambarberita/' . $row->gambar_berita) . '" alt="Upload gambar" height="100px" class="rounded">
                    </a>   
                    ';
                    return $output;
                })
                ->addColumn('tanggalpublish_berita', function ($row) {
                    $dateTime  = Carbon::createFromFormat('Y-m-d H:i:s', $row->tanggalpublish_berita);
                    $formattedDate = $dateTime->format('d/m/Y H:i');
                    return $formattedDate;
                })
                ->addColumn('isactive_berita', function ($row) {
                    $output = $row->isactive_berita == true ? '<span class="badge bg-blue">Aktif</span>' : '<span class="badge bg-red">Tidak Aktif</span>';
                    return $output;
                })
                ->addColumn('action', function ($row) {
                    $buttonUpdate = '';
                    $buttonUpdate = '
                    <a href="' . route('web.berita.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    ';
                    $buttonDelete = '';
                    $buttonDelete = '
                    <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('web/berita/' . $row->id . '?_method=delete') . '">
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
                ->rawColumns(['action', 'gambar_berita', 'isactive_berita'])
                ->toJson();
        }
        return view('web::berita.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $kategoriBerita = KategoriBerita::all();
        return view('web::berita.form', compact('kategoriBerita'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostBeritaRequest $request)
    {
        //
        $request->request->add([
            'users_id' => Auth::id()
        ]);
        $uploadGambarBerita = UtilsHelper::uploadFile($request->file('gambar_berita'), 'gambarberita', null, 'berita', 'gambar_berita');
        $uploadPosterBerita = UtilsHelper::uploadFile($request->file('postervideo_berita'), 'postervideoberita', null, 'berita', 'postervideo_berita');
        $uploadVideoBerita = UtilsHelper::uploadFile($request->file('video_berita'), 'videoberita', null, 'berita', 'video_berita');
        $data = $request->except(['gambar_berita', 'postervideo_berita', 'video_berita']);


        $data = array_merge(
            $data,
            [
                'gambar_berita' => $uploadGambarBerita,
                'postervideo_berita' => $uploadPosterBerita,
                'video_berita' => $uploadVideoBerita,
            ],
        );

        Berita::create($data);
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('web::berita.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $kategoriBerita = KategoriBerita::all();
        $berita = Berita::find($id);
        return view('web::berita.form', compact('kategoriBerita', 'berita'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostBeritaRequest $request, $id)
    {
        //
        $request->request->add([
            'users_id' => Auth::id()
        ]);
        $uploadGambarBerita = UtilsHelper::uploadFile($request->file('gambar_berita'), 'gambarberita', $id, 'berita', 'gambar_berita');
        $uploadPosterBerita = UtilsHelper::uploadFile($request->file('postervideo_berita'), 'postervideoberita', $id, 'berita', 'postervideo_berita');
        $uploadVideoBerita = UtilsHelper::uploadFile($request->file('video_berita'), 'videoberita', $id, 'berita', 'video_berita');
        $data = $request->except(['gambar_berita', 'postervideo_berita', 'video_berita']);


        $data = array_merge(
            $data,
            [
                'gambar_berita' => $uploadGambarBerita,
                'postervideo_berita' => $uploadPosterBerita,
                'video_berita' => $uploadVideoBerita,
            ],
        );

        Berita::find($id)->update($data);
        return response()->json('Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        UtilsHelper::deleteFile($id, 'berita', 'gambarberita', 'gambar_berita');
        UtilsHelper::deleteFile($id, 'berita', 'postervideoberita', 'postervideo_berita');
        UtilsHelper::deleteFile($id, 'berita', 'videoberita', 'video_berita');
        KategoriBerita::destroy($id);
        return response()->json('Berhasil hapus data');
    }
}
