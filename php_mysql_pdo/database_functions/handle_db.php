<?php
require_once 'connect.php';
require_once 'functions.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

// $dataInsert = [
//     'email' => 'unicode.vn@gmail.com',
//     'fullname' => 'Hoàng An',
//     'created_at' => date('Y-m-d H:i:s'),
//     'updated_at' => date('Y-m-d H:i:s')
// ];
// $checkInsert = insert('users', $dataInsert);

// $dataUpdate = [
//     'email' => 'laiminhkiet07052002@gmail.com',
//     'fullname' => 'Lại Minh Kiệt',
//     'updated_at' => date('Y-m-d H:i:s')
// ];
// $condition = 'id=1';
// $checkUpdate = update('users', $dataUpdate, $condition);

$condition = 'id=1';
$deleteData = delete('users', $condition);


