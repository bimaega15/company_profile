<?php
$treeData = [
    ['id' => 1, 'children' => null],
    ['id' => 2, 'children' => [5, 6]],
    ['id' => 3, 'children' => null],
    ['id' => 4, 'children' => [1, 2, 3, 7]],
    ['id' => 5, 'children' => null],
    ['id' => 6, 'children' => [8]],
    ['id' => 7, 'children' => null],
    ['id' => 8, 'children' => null],
    ['id' => 9, 'children' => null],
];
$hiddenDataTree = UtilsHelp::handleSidebar($treeData);

// Fungsi untuk merender data tree
function renderTree($data, $parentId = null, $pushData = null)
{
    echo "<ol class='dd-list'>";
    foreach ($data as $index => $item) {
        if (isset($pushData[$item['id']])) {
            if ($pushData[$item['id']]) {
                continue;
            }
        }

        if ($item['children'] === null && ($parentId === null || in_array($item['id'], $parentId))) {
            echo "<li class='dd-item' data-id='" . ($index + 1) . "'>
                                            <div class='dd-handle'>
                                                {$item['id']}
                                            </div>
                                        </li>";
        } elseif ($item['children'] !== null && ($parentId === null || in_array($item['id'], $parentId))) {
            echo "<li class='dd-item' data-id='" . ($index + 1) . "'> 
                                                <div class='dd-handle'>
                                                    {$item['id']}
                                                </div>
                                        <ol>";
            $childIds = $item['children'];

            renderTree($data, $childIds);
            echo "</ol> </li>";
        }
    }
    echo "</ol>";
}

?>

<div class="clearfix m-b-20">
    <div class="dd">
        <?php
        renderTree($treeData, null, $hiddenDataTree);
        ?>
    </div>
</div>

<script src="{{ asset('js/master/menu/nested.js') }}"></script>