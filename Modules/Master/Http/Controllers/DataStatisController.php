<?php

namespace Modules\Master\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Master\Http\Requests\CreatePostDataStatisRequest;
use App\Models\DataStatis;
use DataTables;
use Illuminate\Support\Facades\Config;

class DataStatisController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public $jenis_ref;
    public function __construct()
    {
        $this->jenis_ref = Config::get('datastatis.jenis_referensi');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = DataStatis::query();
            return DataTables::eloquent($data)
                ->addColumn('action', function ($row) {
                    $buttonUpdate = '';
                    $buttonUpdate = '
                    <a href="' . route('master.dataStatis.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    ';
                    $buttonDelete = '';
                    $buttonDelete = '
                    <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('master/dataStatis/' . $row->id . '?_method=delete') . '">
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
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('master::dataStatis.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $jenisReferensi = $this->jenis_ref;
        return view('master::dataStatis.form', compact('jenisReferensi'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostDataStatisRequest $request)
    {
        //
        $insert = DataStatis::create($request->all());
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('master::dataStatis.form');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $dataStatis = DataStatis::find($id);
        return view('master::dataStatis.form', compact('dataStatis'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostDataStatisRequest $request, $id)
    {
        //
        $data = $request->except(['_method']);
        DataStatis::find($id)->update($data);
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
        DataStatis::destroy($id);
        return response()->json('Berhasil menghapus data', 200);
    }
}
