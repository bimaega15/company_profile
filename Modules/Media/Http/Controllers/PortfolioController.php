<?php

namespace Modules\Media\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Media\Http\Requests\CreatePostPortfolioRequest;
use App\Models\Project;
use App\Models\KategoriPortfolio;
use App\Models\User;
use Carbon\Carbon;
use DataTables;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kategori_portfolio_id = $request->input('kategori_portfolio_id');
            $data = Project::query()->with('kategoriPortfolio', 'users')->where('kategori_portfolio_id', $kategori_portfolio_id);
            return DataTables::eloquent($data)
                ->addColumn('gambar_projects', function ($row) {
                    $output = '
                <a class="photoviewer" href="' . asset('upload/projects/' . $row->gambar_projects) . '" data-gallery="photoviewer" data-title="' . $row->gambar_projects . '" target="_blank">
                    <img src="' . asset('upload/projects/' . $row->gambar_projects) . '" alt="Upload gambar" height="100px" class="rounded">
                </a>   
                ';
                    return $output;
                })
                ->addColumn('waktu_projects', function ($row) {
                    $output = Carbon::createFromFormat('Y-m-d H:i:s', $row->waktu_projects);
                    $convertTiem = $output->format('d/m/Y H:i:s');
                    return $convertTiem;
                })
                ->addColumn('action', function ($row) {
                    $buttonUpdate = '';
                    $buttonUpdate = '
                    <a href="' . route('media.portfolio.edit', $row->id) . '" class="btn btn-warning btn-edit btn-sm">
                        <i class="zmdi zmdi-edit"></i>
                    </a>
                    ';
                    $buttonDelete = '';
                    $buttonDelete = '
                    <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('media/portfolio/' . $row->id . '?_method=delete') . '">
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
                ->rawColumns(['action', 'gambar_projects'])
                ->toJson();
        }
        $dataEncode = json_encode(KategoriPortfolio::all()->toArray());
        return view('media::portfolio.index', [
            'kategori_portfolio' => KategoriPortfolio::all(),
            'kategori_portfolio_encode' => $dataEncode,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('media::portfolio.form');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostPortfolioRequest $request)
    {
        //
        $uploadGambarGallery = UtilsHelper::uploadFile($request->file('gambar_projects'), 'projects', null, 'projects', 'gambar_projects');
        $request->request->add([
            'users_id' => Auth::id()
        ]);
        $data = $request->except(['gambar_projects']);

        $data = array_merge(
            $data,
            [
                'gambar_projects' => $uploadGambarGallery,
                'waktu_projects' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        );
        Project::create($data);
        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('media::portfolio.form');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $portfolio = Project::find($id);
        return view('media::portfolio.form', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostPortfolioRequest $request, $id)
    {
        //
        $uploadGambarGallery = UtilsHelper::uploadFile($request->file('gambar_projects'), 'projects', $id, 'projects', 'gambar_projects');
        $request->request->add([
            'users_id' => Auth::id()
        ]);
        $data = $request->except(['gambar_projects']);

        $data = array_merge(
            $data,
            [
                'gambar_projects' => $uploadGambarGallery,
                'waktu_projects' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        );
        Project::find($id)->update($data);
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
        UtilsHelper::deleteFile($id, 'projects', 'projects', 'gambar_projects');
        Project::destroy($id);
        return response()->json('Berhasil menghapus data', 200);
    }
}
