<?php
// CÁCH 1
// $servername = "localhost";
// $username = "root";
// $password = "";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=php_online", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

// CÁCH 2
// Thông tin kết nối
const _HOST = 'localhost';
const _USER = 'root';
const _PASS = '';
const _DB = 'php_online';
const _DRIVER = 'mysql';

try {
    if (class_exists('PDO')) {
        $dsn = 'mysql:host=' . _HOST . ';' . 'dbname=' . _DB;
        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //Đẩy lỗi vào ngoại lệ khi truy vấn
        ];
        $conn = new PDO($dsn, _USER, _PASS, $options);
        var_dump($conn);
    }
} catch (Exception $e) {
    echo $e->getMessage() . '<br/>';
    die();
}
