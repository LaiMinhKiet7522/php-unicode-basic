<?php
require_once "connect.php";
$sql = "INSERT INTO users(email,fullname,created_at) VALUES (:email, :fullname, :created_at)";
try {
    $statement = $conn->prepare($sql);
    $email = 'nguyenvana@gmail.com';
    $fullname = 'Nguyen Van A';
    $created_at = date('Y-m-d H:i:s');
    $statement->bindParam(':email', $email);
    $statement->bindParam(':fullname', $fullname);
    $statement->bindParam(':created_at', $created_at);
    $insert_status = $statement->execute();
    echo 'Id vừa Insert: '.$conn->lastInsertId().'<br/>';
} catch (Exception $exception) {
    echo 'Error: ' . $exception->getMessage() . '<br/>';
    echo 'File: ' . $exception->getFile() . '<br/>';
    echo 'Line: ' . $exception->getLine() . '<br/>';
}
echo 'Chương trình vẫn chạy tiếp';
