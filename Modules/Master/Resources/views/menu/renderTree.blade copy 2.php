<?php

$hiddenTree = UtilsHelp::handleSidebar($createTree);
// Fungsi untuk merender data tree
function renderTree($data, $parentId = null, $pushData = null, $output = '')
{
    $output .= '
    <div class="dd nestable-with-handle">
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
            $output .= '
            <li class="dd-item dd3-item" data-id="' . ($index + 1) . '">
                <div class="dd-handle dd3-handle"></div>
                <div class="dd3-content">
                    <div class="d-flex justify-content-between align-items-center px-2">
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
            $output .= '
                <li class="dd-item dd3-item" data-id="' . ($index + 1) . '">
                    <div class="dd-handle dd3-handle"></div>
                    <div class="dd3-content">
                        <div class="d-flex justify-content-between align-items-center px-2">
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

            $output .= '<ol class="dd-list">';

            $childIds = $item['children'];
            renderTree($data, $childIds, $pushData, $output);

            $output .= "</ol> 
            </li>";
        }
    }
    $output .= '
        </ol>
    </div>';

    return $output;
}

?>

<div class="clearfix m-b-20">
    {!! renderTree($createTree, null, $hiddenTree) !!}
</div>
<!-- <script src="{{ asset('js/master/menu/nested.js') }}"></script> -->