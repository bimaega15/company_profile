<?php

namespace Modules\Master\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Master\Http\Requests\CreateCounterDataRequest;
use App\Models\CounterData;
use DataTables;

class CounterDataController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = CounterData::query();
            return DataTables::eloquent($data)
                ->addColumn('jumlah_counterdata', function ($row) {
                    $output = number_format($row->jumlah_counterdata, 0, '.', ',');
                    return $output;
                })
                ->addColumn('gambar_counterdata', function ($row) {
                    $output = '
                    <a class="photoviewer" href="' . asset('upload/counterData/' . $row->gambar_counterdata) . '" data-gallery="photoviewer" data-title="' . $row->gambar_counterdata . '" target="_blank">
                        <img src="' . asset('upload/counterData/' . $row->gambar_counterdata) . '" alt="Upload gambar" height="100px" class="rounded">
                    </a>   
                    ';

                    return $output;
                })
                ->addColumn('action', function ($row) {
                    $buttonUpdate = '';
                    $buttonUpdate = '
                    <a href="' . route('master.counterData.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    ';
                    $buttonDelete = '';
                    $buttonDelete = '
                    <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('master/counterData/' . $row->id . '?_method=delete') . '">
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
                ->rawColumns(['action', 'gambar_counterdata', 'jumlah_counterdata'])
                ->toJson();
        }
        return view('master::counterData.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('master::counterData.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreateCounterDataRequest $request)
    {
        //
        $uploadGambarCounterData = UtilsHelper::uploadFile($request->file('gambar_counterdata'), 'counterData', null, 'counter_data', 'gambar_counterdata');
        $data = $request->except(['gambar_counterdata']);

        $data = array_merge(
            $data,
            [
                'gambar_counterdata' => $uploadGambarCounterData,
            ],
        );

        CounterData::create($data);
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('master::counterData.form');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $counterData = CounterData::find($id);
        return view('master::counterData.form', compact('counterData'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreateCounterDataRequest $request, $id)
    {
        //
        $data = $request->except(['_method']);

        $uploadGambarCounterData = UtilsHelper::uploadFile($request->file('gambar_counterdata'), 'counterData', $id, 'counter_data', 'gambar_counterdata');
        $data = $request->except(['gambar_counterdata']);

        $data = array_merge(
            $data,
            [
                'gambar_counterdata' => $uploadGambarCounterData,
            ],
        );

        CounterData::find($id)->update($data);
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
        UtilsHelper::deleteFile($id, 'counter_data', 'counterData', 'gambar_counterdata');
        CounterData::destroy($id);
        return response()->json('Berhasil menghapus data', 200);
    }
}
