<?php
function buildMenu($menuArr, $isSub = false)
{
    if (!empty($menuArr)) {
        echo $isSub ? '<ul class="sub-menu">' : '<ul class="menu">';
        foreach ($menuArr as $item) {
            echo '<li>';
            echo '<a href="' . $item['link'] . '">' . $item['title'] . '</a>';
            if (!empty($item['sub'])) {
                buildMenu($item['sub'], true);
            }
            echo '</li>';
        }
        echo '</ul>';
    }
}

function makeMenu($menuArr, $parentId = 0, $isSub = false)
{
    $childArr = [];
    if (!empty($menuArr)) {
        foreach ($menuArr as $key => $item) {
            if ($item['parent'] == $parentId) {
                $childArr[] = $item;
                unset($menuArr[$key]);
            }
        }
    }

    if (!empty($childArr)) {
        echo $isSub ? '<ul class="sub-menu">' : '<ul class="menu">';
        foreach ($childArr as $key => $item) {
            echo '<li>';
            echo '<a href="' . $item['link'] . '">' . $item['title'] . '</a>';
            makeMenu($menuArr, $item['id'], true);
            echo '</li>';
        }
        echo '</ul>';
    }
}
?>
