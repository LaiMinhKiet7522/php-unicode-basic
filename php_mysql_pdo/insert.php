<?php
require_once "connect.php";
$sql = "INSERT INTO1 users(email,fullname,created_at) VALUES (:email, :fullname, :created_at)";
try {
    $statement = $conn->prepare($sql);
    $email = 'laiminhkiet07052002@gmail.com';
    $fullname = 'Lai Minh Kiet';
    $created_at = date('Y-m-d H:i:s');
    $statement->bindParam(':email', $email);
    $statement->bindParam(':fullname', $fullname);
    $statement->bindParam(':created_at', $created_at);
    $insert_status = $statement->execute();
} catch (Exception $exception) {
    echo 'Error: ' . $exception->getMessage() . '<br/>';
    echo 'File: ' . $exception->getFile() . '<br/>';
    echo 'Line: ' . $exception->getLine() . '<br/>';
}
echo 'Chương trình vẫn chạy tiếp';
