<?php
require_once "connect.php";
try {
    $id = 1;
    $sql = "DELETE FROM users WHERE id=?";
    $statement = $conn->prepare($sql);
    $data=[$id];
    $delete_status = $statement->execute($data);
} catch (Exception $e) {
    echo $exception->getMessage() . '<br/>';
    echo 'File: ' . $exception->getFile() . ' - Line: ' . $exception->getLine() . '<br/>';
}
