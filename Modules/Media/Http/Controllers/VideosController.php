<?php

namespace Modules\Media\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Media\Http\Requests\CreatePostVideoRequest;
use App\Models\Video;
use App\Models\User;
use Carbon\Carbon;
use DataTables;
use Illuminate\Support\Facades\Auth;

class VideosController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Video::query()->with('users');
            return DataTables::eloquent($data)
                ->addColumn('file_videos', function ($row) {
                    $poster = asset('upload/poster/' . $row->poster_videos);
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
                    <source src="' . asset('upload/videos/' . $row->file_videos) . '" type="video/mp4"></source>
                    <source src="' . asset('upload/videos/' . $row->file_videos) . '" type="video/webm"></source>
                    <source src="' . asset('upload/videos/' . $row->file_videos) . '" type="video/ogg"></source>
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
                ->addColumn('waktu_videos', function ($row) {
                    $output = Carbon::createFromFormat('Y-m-d H:i:s', $row->waktu_videos);
                    $convertTiem = $output->format('d/m/Y H:i:s');
                    return $convertTiem;
                })
                ->addColumn('action', function ($row) {
                    $buttonUpdate = '';
                    $buttonUpdate = '
                    <a href="' . route('media.videos.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    ';
                    $buttonDelete = '';
                    $buttonDelete = '
                    <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('media/videos/' . $row->id . '?_method=delete') . '">
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
                ->rawColumns(['action', 'file_videos'])
                ->toJson();
        }
        return view('media::videos.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('media::videos.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostVideoRequest $request)
    {
        //
        $uploadGambarVideo = UtilsHelper::uploadFile($request->file('file_videos'), 'videos', null, 'videos', 'file_videos');
        $uploadPosterVideo = UtilsHelper::uploadFile($request->file('poster_videos'), 'poster', null, 'videos', 'poster_videos');
        $request->request->add([
            'users_id' => Auth::id()
        ]);
        $data = $request->except(['file_videos']);

        $data = array_merge(
            $data,
            [
                'file_videos' => $uploadGambarVideo,
                'poster_videos' => $uploadPosterVideo,
                'waktu_videos' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        );
        Video::create($data);
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('media::videos.form');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $videos = Video::find($id);
        return view('media::videos.form', compact('videos'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostVideoRequest $request, $id)
    {
        //
        $uploadGambarVideo = UtilsHelper::uploadFile($request->file('file_videos'), 'videos', $id, 'videos', 'file_videos');
        $uploadPosterVideo = UtilsHelper::uploadFile($request->file('poster_videos'), 'poster', $id, 'videos', 'poster_videos');
        $request->request->add([
            'users_id' => Auth::id()
        ]);
        $data = $request->except(['file_videos']);

        $data = array_merge(
            $data,
            [
                'file_videos' => $uploadGambarVideo,
                'poster_videos' => $uploadPosterVideo,
                'waktu_videos' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        );
        Video::find($id)->update($data);
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
        UtilsHelper::deleteFile($id, 'videos', 'videos', 'file_videos');
        UtilsHelper::deleteFile($id, 'videos', 'poster', 'poster_videos');
        Video::destroy($id);
        return response()->json('Berhasil menghapus data', 200);
    }
}
