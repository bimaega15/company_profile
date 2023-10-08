<?php

namespace Modules\Master\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use App\Models\DataStatis;
use App\Models\Setting;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Master\Http\Requests\CreatePostSettingsRequest;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $bahasa = DataStatis::byJenisreferensiDatastatis('bahasa')->get();

        $dataSettings = Setting::first();
        return view('master::settings.index', [
            'settings' => $dataSettings,
            'bahasa' => $bahasa,
            'zonawaktu_settings' => $dataSettings != null ? DataStatis::find($dataSettings->zonawaktu_settings) : null
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('master::settings.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostSettingsRequest $request)
    {
        //
        $uploadLogoSettings = UtilsHelper::uploadFile($request->file('logo_settings'), 'settings/logo', null, 'settings', 'logo_settings');
        $uploadIconsSettings = UtilsHelper::uploadFile($request->file('icon_settings'), 'settings/icon', null, 'settings', 'icon_settings');
        $data = $request->except(['icon_settings', 'logo_settings']);
        $data = array_merge(
            $data,
            [
                'logo_settings' => $uploadLogoSettings,
                'icon_settings' => $uploadIconsSettings,
            ],
        );
        Setting::create($data);
        return response()->json('Berhasil menambahkan data');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('master::settings.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('master::settings.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostSettingsRequest $request, $id)
    {
        //


        $uploadLogoSettings = UtilsHelper::uploadFile($request->file('logo_settings'), 'settings/logo', $id, 'settings', 'logo_settings');
        $uploadIconsSettings = UtilsHelper::uploadFile($request->file('icon_settings'), 'settings/icon', $id, 'settings', 'icon_settings');
        $data = $request->except(['icon_settings', 'logo_settings']);
        $data = array_merge(
            $data,
            [
                'logo_settings' => $uploadLogoSettings,
                'icon_settings' => $uploadIconsSettings,
            ],
        );
        Setting::find($id)->update($data);
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
    }

    public function checkData()
    {
        $data = Setting::first();
        return response()->json($data);
    }
}
