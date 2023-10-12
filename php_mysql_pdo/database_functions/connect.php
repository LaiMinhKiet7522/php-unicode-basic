<?php
//Thông tin kết nối
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
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $conn = new PDO($dsn, _USER, _PASS, $options);
    }
} catch (Exception $e) {
    echo '<div style="color: red; border: 1px solid red; padding: 5px 15px;">';
    echo $exception->getMessage() . '<br/>';
    echo '</div>';
    die();
}
