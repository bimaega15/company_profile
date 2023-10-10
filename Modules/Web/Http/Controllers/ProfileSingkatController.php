<?php

namespace Modules\Web\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use App\Models\TentangKami;
use App\Models\TentangKamiDetail;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Web\Http\Requests\CreatePostProfileSingkatRequest;
use DataTables;

class ProfileSingkatController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(Request $request)
    {

        return view('web::profileSingkat.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $tentangKami = TentangKami::first();
        $tentang_kami_id = $tentangKami->id;
        return view('web::profileSingkat.form', compact('tentang_kami_id'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostProfileSingkatRequest $request)
    {
        //
        $uploadGambarProfile = UtilsHelper::uploadFile($request->file('gambar_tentangdetail'), 'profilesingkat', null, 'tentang_kami_detail', 'gambar_tentangdetail');
        $data = $request->except(['gambar_tentangdetail']);

        $data = array_merge(
            $data,
            [
                'gambar_tentangdetail' => $uploadGambarProfile,
            ],
        );
        TentangKamiDetail::create($data);
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('web::profileSingkat.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $profileSingkat = TentangKamiDetail::find($id);
        $tentangKami = TentangKami::first();
        $tentang_kami_id = $tentangKami->id;
        return view('web::profileSingkat.form', compact('profileSingkat', 'tentang_kami_id'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostProfileSingkatRequest $request, $id)
    {
        //
        $uploadGambarProfile = UtilsHelper::uploadFile($request->file('gambar_tentangdetail'), 'profilesingkat', $id, 'tentang_kami_detail', 'gambar_tentangdetail');
        $data = $request->except(['gambar_tentangdetail']);

        $data = array_merge(
            $data,
            [
                'gambar_tentangdetail' => $uploadGambarProfile,
            ],
        );
        TentangKamiDetail::find($id)->update($data);
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
        UtilsHelper::deleteFile($id, 'tentang_kami_detail', 'profilesingkat', 'gambar_tentangdetail');
        TentangKamiDetail::destroy($id);
        return response()->json('Berhasil hapus data');
    }

    public function datatable(Request $request)
    {
        $data = TentangKamiDetail::query();
        return DataTables::eloquent($data)
            ->addColumn('gambar_tentangdetail', function ($row) {
                $output = '
                <a class="photoviewer" href="' . asset('upload/profilesingkat/' . $row->gambar_tentangdetail) . '" data-gallery="photoviewer" data-title="' . $row->gambar_tentangdetail . '" target="_blank">
                    <img src="' . asset('upload/profilesingkat/' . $row->gambar_tentangdetail) . '" alt="Upload gambar" height="100px" class="rounded">
                </a>   
                ';
                return $output;
            })
            ->addColumn('is_active', function ($row) {
                $output = $row->is_active == true ? '<span class="badge bg-blue">Aktif</span>' : '<span class="badge bg-red">Tidak Aktif</span>';
                return $output;
            })
            ->addColumn('action', function ($row) {
                $buttonUpdate = '';
                $buttonUpdate = '
                <a href="' . route('web.profileSingkat.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                    <i class="zmdi zmdi-edit"></i>
                </a>
                ';
                $buttonDelete = '';
                $buttonDelete = '
                <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('web/profileSingkat/' . $row->id . '?_method=delete') . '">
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
            ->rawColumns(['action', 'gambar_tentangdetail', 'is_active'])
            ->toJson();
    }
}
