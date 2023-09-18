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
?>
