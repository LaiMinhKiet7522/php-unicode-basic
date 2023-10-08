<?php
//Thiết lập cookie
setcookie('username', 'Minh Kiệt', time() + 86400, '/', '', false, true);

//Update cookie
setcookie('username', 'minh kiet', time() + 86400, '/', '', false, true);

//Xóa cookie
setcookie('username', 'minh kiet', time() - 60, '/', '', false, true);

//Lấy cookie
echo $_COOKIE["username"];
