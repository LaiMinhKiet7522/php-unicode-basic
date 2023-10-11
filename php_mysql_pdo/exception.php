<?php
/*
 * Xử lý ngoại lệ là quá trình xử lý các lỗi giúp chương trình vẫn hoạt động bình thường
 * Cú pháp:
 * try{
 *
 * }catch()
 * */

echo 'Học lập trình PHP <br/>';
$age = 17;  
try {
    //Tất cả code thực thi sẽ viết trong đây
    // unicode();
    if($age<30){
        throw new Exception('Tuổi phải lớn hơn 18');
    }
} catch (Error $exception) {
    echo $exception->getMessage() . '<br/>';
    echo 'File: ' . $exception->getFile() . ' - Line: ' . $exception->getLine();
    echo '<br/>';
} catch (Exception $exception) {
    echo $exception->getMessage() . '<br/>';
    echo 'File: ' . $exception->getFile() . ' - Line: ' . $exception->getLine();
    echo '<br/>';
}
echo 'Chương trình vẫn chạy';
