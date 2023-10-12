<?php
require_once 'connect.php';
require_once 'functions.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
$dataInsert = [
    'email' => 'unicode.vn@gmail.com',
    'fullname' => 'Hoàng An',
    'created_at' => date('Y-m-d H:i:s'),
    'updated_at' => date('Y-m-d H:i:s')
];
$check = insert('users', $dataInsert);
var_dump($check);