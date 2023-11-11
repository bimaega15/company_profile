<?php

namespace Modules\Media\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Media\Http\Requests\CreatePostClientsRequest;
use App\Models\Client;
use Carbon\Carbon;
use DataTables;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Client::query();
            return DataTables::eloquent($data)
                ->addColumn('gambar_clients', function ($row) {
                    $output = '
                    <a class="photoviewer" href="' . asset('upload/clients/' . $row->gambar_clients) . '" data-gallery="photoviewer" data-title="' . $row->gambar_clients . '" target="_blank">
                        <img src="' . asset('upload/clients/' . $row->gambar_clients) . '" alt="Upload gambar" height="40px" style="margin-top:-5px;" class="rounded">
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
                    <a href="' . route('media.clients.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    ';
                    $buttonDelete = '';
                    $buttonDelete = '
                    <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('media/clients/' . $row->id . '?_method=delete') . '">
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
                ->rawColumns(['action', 'gambar_clients', 'is_active'])
                ->toJson();
        }
        return view('media::clients.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('media::clients.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostClientsRequest $request)
    {
        //
        $uploadGambarClient = UtilsHelper::uploadFile($request->file('gambar_clients'), 'clients', null, 'clients', 'gambar_clients');
        $data = $request->except(['gambar_clients']);

        $data = array_merge(
            $data,
            [
                'gambar_clients' => $uploadGambarClient,
            ],
        );
        Client::create($data);
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('media::clients.form');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $clients = Client::find($id);
        return view('media::clients.form', compact('clients'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostClientsRequest $request, $id)
    {
        //
        $uploadGambarClient = UtilsHelper::uploadFile($request->file('gambar_clients'), 'clients', $id, 'clients', 'gambar_clients');

        $data = $request->except(['gambar_clients']);

        $data = array_merge(
            $data,
            [
                'gambar_clients' => $uploadGambarClient,
            ],
        );
        Client::find($id)->update($data);
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
        UtilsHelper::deleteFile($id, 'clients', 'clients', 'gambar_clients');
        Client::destroy($id);
        return response()->json('Berhasil menghapus data', 200);
    }
}
