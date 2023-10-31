<?php

namespace Modules\Web\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use App\Models\Service;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DataTables;
use Illuminate\Support\Facades\Config;
use Modules\Web\Http\Requests\CreatePostServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public $jenisHari;

    public function __construct()
    {
        $this->jenisHari = Config::get('datastatis.jenis_hari');
    }


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::query();
            return DataTables::eloquent($data)
                ->addColumn('gambar_service', function ($row) {
                    $output = '
                    <a class="photoviewer" href="' . asset('upload/service/' . $row->gambar_service) . '" data-gallery="photoviewer" data-title="' . $row->gambar_service . '" target="_blank">
                        <img src="' . asset('upload/service/' . $row->gambar_service) . '" alt="Upload gambar" height="100px" class="rounded">
                    </a>   
                    ';
                    return $output;
                })
                ->addColumn('waktu_service', function ($row) {
                    $output = $row->waktu_service;
                    return $output;
                })

                ->addColumn('action', function ($row) {
                    $buttonUpdate = '';
                    $buttonUpdate = '
                    <a href="' . route('web.service.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    ';

                    $buttonDelete = '';
                    $buttonDelete = '
                    <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('web/service/' . $row->id . '?_method=delete') . '">
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
                ->rawColumns(['action', 'gambar_service', 'waktu_service'])
                ->toJson();
        }

        return view('web::service.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $jenisHari = $this->jenisHari;
        return view('web::service.form', compact('jenisHari'));
    }


    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('web::service.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('web::service.form', compact('service'));
    }

    public function store(CreatePostServiceRequest $request)
    {
        //
        $uploadGambarService = UtilsHelper::uploadFile($request->file('gambar_service'), 'service', null, 'service', 'gambar_service');
        $data = $request->except(['gambar_service']);

        $data = array_merge(
            $data,
            [
                'gambar_service' => $uploadGambarService,
            ],
        );
        Service::create($data);
        return response()->json('Berhasil menambahkan data', 201);
    }


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostServiceRequest $request, $id)
    {
        $uploadGambarService = UtilsHelper::uploadFile($request->file('gambar_service'), 'service', $id, 'service', 'gambar_service');
        $data = $request->except(['gambar_service']);

        $data = array_merge(
            $data,
            [
                'gambar_service' => $uploadGambarService,
            ],
        );
        Service::find($id)->update($data);
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        UtilsHelper::deleteFile($id, 'service', 'service', 'gambar_service');
        Service::destroy($id);
        return response()->json([
            'status' => 200,
            'message' => "Berhasil hapus data"
        ], 200);
    }
}
