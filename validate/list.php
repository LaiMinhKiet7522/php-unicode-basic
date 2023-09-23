<?php 
require_once 'function.php';
?>
<h3>DANH SÁCH KHÁCH HÀNG</h3>
<hr>
<?php 
if(!empty($_GET['message'])){
    $messageCode = $_GET['message'];
    echo getMessage($messageCode);
}
?>