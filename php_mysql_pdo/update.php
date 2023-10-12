<?php
require_once "connect.php";
//SQL Query
$sql = 'UPDATE users SET email=:email, fullname=:fullname WHERE id=:id';

//Data
$email = 'info@unicode.vn';
$fullname = 'Unicode';
$id = 1;
try {
    $statement = $conn->prepare($sql);
    $statement->bindParam(':email', $email);
    $statement->bindParam(':fullname', $fullname);
    $statement->bindParam(':id', $id);
    $update_status = $statement->execute();
} catch (Exception $e) {
    echo $exception->getMessage() . '<br/>';
    echo 'File: ' . $exception->getFile() . ' - Line: ' . $exception->getLine() . '<br/>';
}
