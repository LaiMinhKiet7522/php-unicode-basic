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

function getMenuTree($menuArr, $parentId = 0, &$resultArr = [])
{
    if (!empty($menuArr)) {
        foreach ($menuArr as $key => $item) {
            if ($item['parent'] == $parentId) {
                $resultArr[$key] = $item;
                getMenuTree($menuArr, $item['id'], $resultArr[$key]['sub']);
                if (empty($resultArr[$key]['sub'])) {
                    unset($resultArr[$key]['sub']);
                }
                unset($menuArr[$key]);
            }
        }
    }
    return $resultArr;
}

function getChildCategories($categoryArr, $parentId = 0, &$resultArr = [])
{
    if (!empty($categoryArr)) {
        foreach ($categoryArr as $key => $item) {
            if ($item['parent'] == $parentId) {
                $resultArr[] = $item['id'];
                getChildCategories($categoryArr, $item['id'], $resultArr);
            }
        }
    }
    return $resultArr;
}
?>
