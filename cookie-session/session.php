<?php 
session_save_path('./logs');
if (empty(session_id())){
    session_start();
}
$_SESSION['username'] = 'Minh Kiet';
$_SESSION['age'] = '22';

//Update Session
// $_SESSION['username'] = 'Lai Minh Kiet';
// $_SESSION['age'] = '21';

//Xóa 1 Session
// unset($_SESSION['age']);

//Xóa tất cả Session
// session_destroy();


echo '<pre>';
print_r($_SESSION);
echo '</pre>';
