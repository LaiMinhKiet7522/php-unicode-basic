<?php
require_once 'connect.php';
require_once 'functions.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');

// $dataInsert = [
//     'email' => 'nguyenvanb@gmail.com',
//     'fullname' => 'Nguyễn Văn B',
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

// $condition = 'id=1';
// $deleteData = delete('users', $condition);

// $data = getRaw('SELECT * FROM users');
// echo '<pre>';
// print_r($data);
// echo '</pre>';

// $data = getfirstRaw('SELECT * FROM users');
// echo '<pre>';
// print_r($data);
// echo '</pre>';

// $data = getRecord('users','email, fullname', 'id = 1');
// echo '<pre>';
// print_r($data);
// echo '</pre>';

$data = getFirst('users','email, fullname');
echo '<pre>';
print_r($data);
echo '</pre>';


