<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\KirimPesan;
use DataTables;
use Illuminate\Support\Facades\Config;

class PesanUserController extends Controller
{


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = KirimPesan::query()->with('roleId');
            return DataTables::eloquent($data)
                ->addColumn('action', function ($row) {
                    $buttonDelete = '';
                    $buttonDelete = '
                    <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('pesanUser/' . $row->id . '?_method=delete') . '">
                        <i style="font-size:17px;" class="zmdi zmdi-delete"></i>
                    </button>
                    ';

                    $buttonDetail = '';
                    $buttonDetail = '
                    <button type="button" class="btn btn-primary btn-sm btn-detail" data-url="' . url('pesanUser/' . $row->id) . '" data-id="' . $row->id . '">
                        <i style="font-size:16px;" class="zmdi zmdi-file-text"></i>
                    </button>
                    ';

                    $button = '
                <div class="text-center">
                    ' . $buttonDelete . '
                    ' . $buttonDetail . '
                </div>
                ';

                    return $button;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('one.pesanUser.index');
    }

    public function show($id)
    {
        $kirimPesan = KirimPesan::find($id);
        return view('one.pesanUser.form', [
            'kirimPesan' => $kirimPesan
        ]);
    }

    public function destroy($id)
    {
        KirimPesan::destroy($id);
        return response()->json('Berhasil menghapus data', 200);
    }
}
