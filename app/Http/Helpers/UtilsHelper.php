<?php

namespace App\Http\Helpers;

use App\Models\Berita;
use App\Models\Client;
use App\Models\Menu;
use App\Models\Produk;
use App\Models\Setting;
use App\Models\TentangKami;
use App\Models\TentangKamiDetail;
use App\Models\Testimoni;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use File;
use Illuminate\Support\Facades\Config;
use Spatie\Permission\Models\Role;

class UtilsHelper
{
    public static function uploadFile($file, $lokasi, $id = null, $table = null, $nameAttribute = null)
    {
        if ($file != null) {
            // delete file
            UtilsHelper::deleteFile($id, $table, $lokasi, $nameAttribute);

            // nama file
            $fileExp =  explode('.', $file->getClientOriginalName());
            $name = $fileExp[0];
            $ext = $fileExp[1];
            $name = time() . '-' . str_replace(' ', '-', $name) . '.' . $ext;

            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload =  public_path() . '/upload/' . $lokasi . '/';

            // upload file
            $file->move($tujuan_upload, $name);
        } else {
            if ($id == null) {
                $name = 'default.png';
            } else {
                $data = DB::table($table)->where('id', $id)->first();
                $setData = (array) $data;
                $name = $setData[$nameAttribute];
            }
        }

        return $name;
    }

    public static function deleteFile($id = null, $table = null, $lokasi = null, $name = null)
    {
        if ($id != null) {
            $data = DB::table($table)->where('id', '=', $id)->first();
            $setData = (array) $data;
            $gambar = public_path() . '/upload/' . $lokasi . '/' . $setData[$name];
            if (file_exists($gambar)) {
                if ($setData[$name] != 'default.png') {
                    File::delete($gambar);
                }
            }
        }
    }

    public static function handleSidebar($treeData)
    {
        $pushData = [];
        function hiddenTree($data, $parentId = null)
        {
            $pushData = [];
            foreach ($data as $index => $item) {
                if ($item['children'] !== null && ($parentId === null || in_array($item['id'], $parentId))) {
                    $childIds = $item['children'];
                    $pushData[] = $childIds;
                    hiddenTree($data, $childIds);
                }
            }
            return $pushData;
        }
        $pushData = hiddenTree($treeData, null);
        $flattenedArray = [];
        foreach ($pushData as $subArray) {
            $flattenedArray = array_merge($flattenedArray, $subArray);
        }
        $hiddenData = [];
        foreach ($flattenedArray as $key => $value) {
            $hiddenData[$value] = $value;
        }

        return $hiddenData;
    }
    public static function createStructureTree()
    {
        $daftarMenu = Menu::orderBy('no_menu', 'asc')->orderBy('id', 'asc')->get();
        $listMenu = [];
        foreach ($daftarMenu as $key => $value) {
            if ($value->is_node == '1') {
                if ($value->children_menu != null || $value->children_menu != '') {
                    $explodeMenu = json_decode($value->children_menu, true);
                    $listMenu[] = [
                        'id' => $value->id,
                        'children' => $explodeMenu
                    ];
                } else {
                    $listMenu[] = [
                        'id' => $value->id,
                        'children' => null
                    ];
                }
            } else {
                $listMenu[] = [
                    'id' => $value->id,
                    'children' => null,
                ];
            }
        }
        return $listMenu;
    }
    public static function menuFilterById($id)
    {
        $menu = Menu::find($id);
        return $menu;
    }



    public static function renderSidebar($data, $parentId = null, $pushData = null)
    {
        foreach ($data as $index => $item) {
            if (isset($pushData[$item['id']])) {
                if ($pushData[$item['id']]) {
                    continue;
                }
            }

            $menuData = UtilsHelper::menuFilterById($item['id']);
            $btnClassSpecified = '';
            if ($menuData->link_menu == 'logout') {
                $btnClassSpecified = 'btn-logout';
            }

            if ($item['children'] === null && ($parentId === null || in_array($item['id'], $parentId))) {
                echo  '
                <li>
                    <a href="' . url($menuData->link_menu) . '" class="' . $btnClassSpecified . '">
                        ' . $menuData->icon_menu . '<span>' . $menuData->nama_menu . '</span>
                    </a>
                </li>
                ';
            } elseif ($item['children'] !== null && ($parentId === null || in_array($item['id'], $parentId))) {
                echo  '
                <li> <a href="' . $menuData->link_menu . '" class="menu-toggle">' . $menuData->icon_menu . '<span>' . $menuData->nama_menu . '</span> </a>
                    <ul class="ml-menu">
                ';

                $childIds = $item['children'];
                UtilsHelper::renderSidebar($data, $childIds);

                echo '
                    </ul>
                </li>
            ';
            }
        }
    }

    public static function renderTree($data, $parentId = null, $pushData = null)
    {
        echo  '
            <ol class="dd-list">';
        foreach ($data as $index => $item) {
            if (isset($pushData[$item['id']])) {
                if ($pushData[$item['id']]) {
                    continue;
                }
            }

            $menu_item = UtilsHelper::menuFilterById($item['id']);
            $buttonUpdate = '
                <a href="' . route('master.menu.edit', $menu_item->id) . '" class="btn btn-warning btn-edit btn-sm" style="padding: 0 5px;">
                    <i class="zmdi zmdi-edit" style="font-size: 10px;"></i>
                </a>
                ';
            $buttonDelete = '
                <button type="button" class="btn-delete btn btn-danger btn-sm" data-url="' . url('master/menu/' . $menu_item->id . '?_method=delete') . '" style="padding: 0 5px;">
                    <i class="zmdi zmdi-delete" style="font-size: 10px;"></i>
                </button>
                ';

            if ($item['children'] === null && ($parentId === null || in_array($item['id'], $parentId))) {
                echo  '
                <li class="dd-item dd3-item" data-id="' . $item['id'] . '">
                    <div class="dd-handle dd3-handle"></div>
                    <div class="dd3-content p-0">
                        <div class="d-flex justify-content-between align-items-center" style="padding-left: 50px; padding-right: 10px;">
                            <div>
                                <a href="' . url($menu_item->link_menu) . '">
                                ' . $menu_item->icon_menu . ' &nbsp; ' . $menu_item->nama_menu . '
                                </a>
                            </div>
                            <div>
                                ' . $buttonUpdate . '
                                ' . $buttonDelete . '
                            </div>
                        </div>
                    </div>
                </li>
                ';
            } elseif ($item['children'] !== null && ($parentId === null || in_array($item['id'], $parentId))) {
                echo  '
                    <li class="dd-item dd3-item" data-id="' . $item['id'] . '">
                        <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content p-0">
                                <div class="d-flex justify-content-between align-items-center" style="padding-left: 15px; padding-right: 10px;">
                                <div>
                                    <a href="' . url($menu_item->link_menu) . '">
                                    ' . $menu_item->icon_menu . ' &nbsp; ' . $menu_item->nama_menu . '
                                    </a>
                                </div>
                                <div>
                                    ' . $buttonUpdate . '
                                    ' . $buttonDelete . '
                                </div>
                            </div>
                        </div>';
                $childIds = $item['children'];
                UtilsHelper::renderTree($data, $childIds);
                echo '
                    </li>
                ';
            }
        }
        echo  '
            </ol>';
    }
    public static function tanggalBulanTahunKonversi($tanggal)
    {
        $tanggalWaktu = Carbon::createFromFormat('Y-m-d H:i:s', $tanggal);
        $tanggalIndonesia = $tanggalWaktu->isoFormat('D MMMM Y', 'Do MMMM Y');
        return $tanggalIndonesia;
    }

    public static function limitText($text, $limit = 100, $row)
    {
        if (strlen($text) > $limit) {
            $text = substr($text, 0, $limit);
            $text .= '... <a href="' . route("website.blogs.edit",  $row->id) . '" class="isi_berita_detail text-info font-weight-bold" data-id="' . $row->id . '">Lihat Detail</a>';
        }
        return $text;
    }

    public static function limitTextGlobal($text, $limit = 100)
    {
        if (strlen($text) > $limit) {
            $text = substr($text, 0, $limit);
            $text .= '...';
        }
        return $text;
    }

    public static function settingApp()
    {
        return Setting::first();
    }

    public static function client()
    {
        return Client::all();
    }

    public static function aboutUs()
    {
        return TentangKami::first();
    }

    public static function aboutUsDetail()
    {
        $aboutUs = UtilsHelper::aboutUs();
        $aboutUsDetail = TentangKamiDetail::where('tentang_kami_id', $aboutUs->id)
            ->where('is_active', 1)
            ->limit(3)
            ->get();

        return $aboutUsDetail;
    }

    public static function aboutUsDetailKompleks()
    {
        $aboutUs = UtilsHelper::aboutUs();
        $aboutUsDetail = TentangKamiDetail::where('tentang_kami_id', $aboutUs->id)
            ->where('is_active', 1)
            ->get();

        return $aboutUsDetail;
    }

    public static function blogsLimit()
    {
        $blogs = Berita::limit(3)
            ->orderBy('tanggalpublish_berita', 'desc')
            ->get();
        return $blogs;
    }

    public static function pricingLimit()
    {
        $pricing = Produk::limit(3)->get();
        return $pricing;
    }

    public static function pricing()
    {
        $pricing = Produk::all();
        return $pricing;
    }

    public static function testimoni()
    {
        $testimoni = Testimoni::all();
        return $testimoni;
    }

    public static function roles()
    {
        $role = Role::all();
        return $role;
    }

    public static function roleContactUs()
    {
        $role = Role::where('name', 'like', '%Support%')
            ->orWhere('name', 'like', '%Sales%')
            ->orWhere('name', 'like', '%Finance%')
            ->get();
        return $role;
    }

    public static function nilaiJenisProduk($jenis_produk)
    {
        $data = Config::get('datastatis.nilai_jenis_produk');
        return $data[$jenis_produk];
    }
    public static function oneVideoBanner()
    {
        $data = Video::first();
        return $data;
    }
}
