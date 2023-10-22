<?php

namespace Modules\Web\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use App\Models\Produk;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Web\Http\Requests\CreatePostProdukRequest;
use DataTables;
use Illuminate\Support\Facades\Config;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    public $jenis_produk;
    public function __construct()
    {
        $this->jenis_produk = Config::get('datastatis.jenis_produk');
    }


    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Produk::query();
            return DataTables::eloquent($data)
                ->addColumn('gambar_produk', function ($row) {
                    $output = '
                    <a class="photoviewer" href="' . asset('upload/produk/' . $row->gambar_produk) . '" data-gallery="photoviewer" data-title="' . $row->gambar_produk . '" target="_blank">
                        <img src="' . asset('upload/produk/' . $row->gambar_produk) . '" alt="Upload gambar" height="100px" class="rounded">
                    </a>   
                    ';
                    return $output;
                })
                ->addColumn('harga_produk', function ($row) {
                    $output = number_format($row->harga_produk, 0, '.', ',');
                    return $output;
                })

                ->addColumn('keterangan_produk', function ($row) {
                    $output = UtilsHelper::limitTextGlobal($row->keterangan_produk, 200);
                    return $output;
                })

                ->addColumn('action', function ($row) {
                    $buttonUpdate = '';
                    $buttonUpdate = '
                    <a href="' . route('web.produk.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    ';
                    $buttonDelete = '';
                    $buttonDelete = '
                    <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('web/produk/' . $row->id . '?_method=delete') . '">
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
                ->rawColumns(['action', 'gambar_produk', 'is_active', 'keterangan_produk'])
                ->toJson();
        }
        return view('web::produk.index');
    }



    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $jenisProduk = $this->jenis_produk;
        return view('web::produk.form', compact('jenisProduk'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostProdukRequest $request)
    {
        //
        $uploadGambarProfile = UtilsHelper::uploadFile($request->file('gambar_produk'), 'produk', null, 'produk', 'gambar_produk');
        $data = $request->except(['gambar_produk']);

        $data = array_merge(
            $data,
            [
                'gambar_produk' => $uploadGambarProfile,
            ],
        );
        Produk::create($data);
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('web::produk.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        $jenisProduk = $this->jenis_produk;
        return view('web::produk.form', compact('produk', 'jenisProduk'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostProdukRequest $request, $id)
    {
        //
        $uploadGambarProfile = UtilsHelper::uploadFile($request->file('gambar_produk'), 'produk', $id, 'produk', 'gambar_produk');
        $data = $request->except(['gambar_produk']);

        $data = array_merge(
            $data,
            [
                'gambar_produk' => $uploadGambarProfile,
            ],
        );
        Produk::find($id)->update($data);
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
        UtilsHelper::deleteFile($id, 'produk', 'produk', 'gambar_produk');
        Produk::destroy($id);
        return response()->json('Berhasil hapus data');
    }
}
