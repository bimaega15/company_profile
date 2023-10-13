<?php

$hiddenTree = UtilsHelp::handleSidebar($createTree);
// Fungsi untuk merender data tree
function renderTree($data, $parentId = null, $pushData = null)
{
    echo  '
        <ol class="dd-list">';
    foreach ($data as $index => $item) {
        if (isset($pushData[$item['id']])) {
            if ($pushData[$item['id']]) {
                continue;
            }
        }

        $menu_item = UtilsHelp::menuFilterById($item['id']);
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
            renderTree($data, $childIds);
            echo '
                </li>
            ';
        }
    }
    echo  '
        </ol>';
}
?>

<div class="clearfix m-b-20">
    <div id="output_menu">
        <div class="dd nestable-with-handle">
            {!! renderTree($createTree, null, $hiddenTree) !!}
        </div>
    </div>
</div>
<script class="url_rendermenu_form" data-url="{{ route('master.menu.renderTree') }}"></script>
<script class="url_sortAndNested" data-url="{{ route('master.menu.sortAndNested') }}"></script>
<script src="{{ asset('js/master/menu/nested.js') }}"></script>