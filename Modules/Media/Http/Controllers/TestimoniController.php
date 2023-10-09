<?php

namespace Modules\Media\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Media\Http\Requests\CreatePostTestimonisRequest;
use App\Models\Testimoni;
use DataTables;

class TestimoniController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Testimoni::query();
            return DataTables::eloquent($data)
                ->addColumn('gambar_testimoni', function ($row) {
                    $output = '
                        <a class="photoviewer" href="' . asset('upload/testimoni/' . $row->gambar_testimoni) . '" data-gallery="photoviewer" data-title="' . $row->gambar_testimoni . '" target="_blank">
                            <img src="' . asset('upload/testimoni/' . $row->gambar_testimoni) . '" alt="Upload gambar" height="100px" class="rounded">
                        </a>   
                        ';

                    return $output;
                })
                ->addColumn('is_active', function ($row) {
                    $output = $row->is_active == true ? '<span class="badge bg-blue">Aktif</span>' : '<span class="badge bg-red">Tidak Aktif</span>';
                    return $output;
                })
                ->addColumn('rating_testimoni', function ($row) {
                    $countStart = 5;
                    $dataStar = $row->rating_testimoni;
                    $output = '';
                    for ($i = 1; $i <= $countStart; $i++) {
                        if ($i <= $dataStar) {
                            $output .= '<i class="zmdi zmdi-star text-warning" style="font-size: 25px;"></i>';
                        } else {
                            $output .= '<i class="zmdi zmdi-star text-light" style="font-size: 25px;"></i>';
                        }
                    }

                    return $output;
                })
                ->addColumn('action', function ($row) {
                    $buttonUpdate = '';
                    $buttonUpdate = '
                        <a href="' . route('media.testimoni.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                            <i class="zmdi zmdi-edit"></i>
                        </a>
                        ';
                    $buttonDelete = '';
                    $buttonDelete = '
                        <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('media/testimoni/' . $row->id . '?_method=delete') . '">
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
                ->rawColumns(['action', 'gambar_testimoni', 'is_active', 'rating_testimoni'])
                ->toJson();
        }
        return view('media::testimoni.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('media::testimoni.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostTestimonisRequest $request)
    {
        //
        $uploadGambarTestimoni = UtilsHelper::uploadFile($request->file('gambar_testimoni'), 'testimoni', null, 'testimoni', 'gambar_testimoni');
        $data = $request->except(['gambar_testimoni', 'rating']);

        $data = array_merge(
            $data,
            [
                'gambar_testimoni' => $uploadGambarTestimoni,
            ],
        );
        Testimoni::create($data);
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('media::testimoni.form');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $testimoni = Testimoni::find($id);
        return view('media::testimoni.form', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostTestimonisRequest $request, $id)
    {
        //
        $uploadGambarTestimoni = UtilsHelper::uploadFile($request->file('gambar_testimoni'), 'testimoni', $id, 'testimoni', 'gambar_testimoni');
        $data = $request->except(['gambar_testimoni', 'rating']);

        $data = array_merge(
            $data,
            [
                'gambar_testimoni' => $uploadGambarTestimoni,
            ],
        );
        Testimoni::find($id)->update($data);
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
        UtilsHelper::deleteFile($id, 'testimoni', 'testimoni', 'gambar_testimoni');
        Testimoni::destroy($id);
        return response()->json('Berhasil menghapus data', 200);
    }
}
