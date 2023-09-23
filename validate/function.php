<?php
$messageArray = [
    1 => 'Thêm mới thành công',
    2 => 'Sửa thành công',
    3 => 'Xóa thành công',
];
function redirect($path)
{
    header('location: ' . $path);
    exit();
}

function getMessage($code)
{
    global $messageArray;
    if (array_key_exists($code, $messageArray)) {
        return $messageArray[$code];
    }
    return false;
}

function makeChecked($id)
{
    if (!empty($_GET['sothich'])) {
        $sothich = $_GET['sothich'];
    } else {
        $sothich = [];
    }
    if (!empty($_POST['sothich']) && in_array($id, $_POST['sothich'])) {
        $checked = 'checked';
    } elseif (!empty($sothich) && in_array($id, $sothich)) {
        $checked = 'checked';
    } else {
        $checked = false;
    }
    return $checked;
}
?>
