<?php
//Kiểm tra phương thức POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Lấy thông tin file
    if (!empty($_FILES['file_upload'])) {

        //Lấy tên file
        $fileName = $_FILES['file_upload']['name'];

        //Đổi tên file
        $fileNameArr = explode('.', trim($fileName));
        $filExtension = end($fileNameArr);
        $fileBefore = sha1(uniqid());
        $fileName = $fileBefore . '.' . $filExtension;

        //
        $allowedArr = [
            'mp4', 'png', 'gif', 'jpeg', 'jpg'
        ];
        if (in_array($filExtension, $allowedArr)) {

            //Kiểm tra dung lượng file
            $size = $_FILES['file_upload']['size'];
            if ($size <= 3145728) {
                $upload = move_uploaded_file($_FILES['file_upload']['tmp_name'], './uploads/' . $fileName);
                if ($upload) {
                    echo 'Upload thành công';
                } else {
                    echo 'Upload không thành công';
                }
            } else {
                echo 'Dung lượng vượt quá cho phép';
            }
        } else {
            echo 'Kiểu file không hợp lệ';
        }
    }
}
