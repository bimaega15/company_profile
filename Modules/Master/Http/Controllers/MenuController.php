<?php

namespace Modules\Master\Http\Controllers;

use App\Http\Helpers\UtilsHelper;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Master\Http\Requests\CreatePostMenuRequest;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $createTree = UtilsHelper::createStructureTree();
            return view('master::menu.renderTree', compact('createTree'))->render();
        }
        return view('master::menu.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $daftarMenu = Menu::all();
        return view('master::menu.form', compact('daftarMenu'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CreatePostMenuRequest $request)
    {
        //
        $data = $request->except(['menu_root']);

        $insertMenu = Menu::create($data);
        $menu_id = $insertMenu->id;

        $menu_root = $request->input('menu_root');
        if ($menu_root != null) {
            $getMenu = Menu::find($menu_root);
            $getMenuChildren = $getMenu->children_menu;

            $children_menu_update = $menu_id;
            if ($getMenuChildren != null) {
                $children_menu_update = $getMenuChildren . ',' . $menu_id;
            }
            $getMenu->update([
                'children_menu' => $children_menu_update
            ]);
        }

        return response()->json('Berhasil menambahkan data', 201);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('master::menu.form');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        $daftarMenu = Menu::all();
        return view('master::menu.form', compact('menu', 'daftarMenu'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(CreatePostMenuRequest $request, $id)
    {
        //
        Menu::find($id)->update($request->all());
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
        $nestedTree = json_decode(request()->input('nestedTree'), true);
        function flattenData($data)
        {
            $result = [];
            foreach ($data as $key => $item) {
                $result[] = $item["id"];
                if (isset($item["children"])) {
                    $result = array_merge($result, flattenData($item["children"]));
                }
            }

            return $result;
        }
        $dataFlatten = flattenData($nestedTree);

        $getDataMenu = Menu::find($id);
        $arrayMerge = [];
        if ($getDataMenu->children_menu != null) {
            $childrenMenu = explode(',', $getDataMenu->children_menu);
            $arrayMerge = array_merge([$id], $childrenMenu);
        } else {
            $arrayMerge = [$id];
        }

        $result = array_filter($dataFlatten, function ($value) use ($arrayMerge) {
            $dataFilter = true;
            if (in_array($value, $arrayMerge)) {
                $dataFilter = false;
            };
            return $dataFilter;
        });
        $someId = array_values($result);
        foreach ($someId as $key => $value) {
            $getMenu = Menu::find($value);
            if ($getMenu) {
                $getMenu->no_menu = $key + 1;
                $getMenu->save();
            }
        }

        Menu::whereIn('id', $arrayMerge)->delete();
        return response()->json('Berhasil menghapus list menu');
    }

    public function renderTree()
    {
        $createTree = UtilsHelper::createStructureTree();
        return view('master::menu.renderTreeAction', compact('createTree'))->render();
    }
}
