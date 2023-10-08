<?php
//Thiết lập cookie
setcookie('username', 'Minh Kiệt', time() + 86400, '/', '', false, true);

$data = [
    'item 1',
    'item 2'
];
$dataStr = json_encode($data);

//Update cookie
setcookie(
    'username',
    $dataStr,
    time() + 86400,
    '/',
    '',
    false,
    true
);

//Xóa cookie
// setcookie('username', 'minh kiet', time() - 60, '/', '', false, true);

//Lấy cookie
$dataStr =  $_COOKIE['username'];
echo $dataStr;
echo '<br/>';
$data = json_decode($dataStr, true);
echo '<pre>';
print_r($data);
echo '</pre>';

/*
 * Chức năng sản phẩm đã xem
 * - Khi xem sản phẩm 1 => Lấy id sản phẩm => Lưu id vào cookie
 * - Khi xem sản phẩm 2 => Lấy id sản phẩm => Lấy id cũ của cookie => Thêm id mới => Lưu vào cookie
 *
 * */

//Lưu ý:
// -Không lưu các thông tin quan trọng ở cookie như: Mật khẩu, tài khoản ngân hàng...
// -Cookie không chấp nhận các giá trị phức hợp như Mảng, Object, các kiểu null, '',
