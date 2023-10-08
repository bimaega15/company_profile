<?php

namespace Modules\Media\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Media\Http\Requests\CreatePostGalleryRequest;
use App\Models\Gallery;
use DataTables;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Gallery::query();
            return DataTables::eloquent($data)
                ->addColumn('gambar_gallery', function ($row) {
                    $output = '
                    <a class="photoviewer" href="' . asset('/') . '/upload/gallery/' . $row->gambar_gallery . '" data-gallery="photoviewer" data-title="' . $row->gambar_gallery . '" target="_blank">
                        <img src="' . asset('/') . '/upload/gallery/' . $row->gambar_gallery . '" alt="Upload gambar" height="100px" class="rounded">
                    </a>   
                    ';

                    return $output;
                })
                ->addColumn('action', function ($row) {
                    $buttonUpdate = '';
                    $buttonUpdate = '
                    <a href="' . route('media.gallery.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    ';
                    $buttonDelete = '';
                    $buttonDelete = '
                    <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('media/gallery/' . $row->id . '?_method=delete') . '">
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
                ->rawColumns(['action', 'gambar_gallery'])
                ->toJson();
        }
        return view('media::gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('media::gallery.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostGalleryRequest $request)
    {
        //
        $uploadGambarGallery = UtilsHelper::uploadFile($request->file('gambar_gallery'), 'gallery', null, 'gallery', 'gambar_gallery');
        $request->request->add([
            'users_id' => Auth::id()
        ]);
        $data = $request->except(['gambar_gallery']);

        $data = array_merge(
            $data,
            [
                'gambar_gallery' => $uploadGambarGallery,
            ],
        );
        Gallery::create($data);
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('media::gallery.form');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('media::gallery.form', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostGalleryRequest $request, $id)
    {
        //
        $uploadGambarGallery = UtilsHelper::uploadFile($request->file('gambar_gallery'), 'gallery', $id, 'gallery', 'gambar_gallery');
        $request->request->add([
            'users_id' => Auth::id()
        ]);
        $data = $request->except(['gambar_gallery']);

        $data = array_merge(
            $data,
            [
                'gambar_gallery' => $uploadGambarGallery,
            ],
        );
        Gallery::find($id)->update($data);
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
        UtilsHelper::deleteFile($id, 'gallery', 'gallery', 'gambar_gallery');
        Gallery::destroy($id);
        return response()->json('Berhasil menghapus data', 200);
    }
}
