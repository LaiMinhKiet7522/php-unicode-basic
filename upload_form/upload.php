<?php
//Kiểm tra phương thức POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = []; // Mảng lưu trữ lỗi upload
    $allowedArr = [
        'mp4', 'png', 'gif', 'jpeg', 'jpg'
    ];
    $maxFileSize = 3145728;

    //Lấy thông tin file
    if (!empty($_FILES['file_upload'])) {

        //Kiểm tra xem file đã được chọn chưa
        if ($_FILES['file_upload']['error'] == 4) {
            $errors['choose_file'] = 'Vui lòng chọn file';
        } else {

            //Lấy tên file
            $fileName = $_FILES['file_upload']['name'];

            //Đổi tên file
            $fileNameArr = explode('.', trim($fileName));
            $filExtension = end($fileNameArr);
            $fileBefore = sha1(uniqid());
            $fileName = $fileBefore . '.' . $filExtension;

            //Kiểm tra định dạng file
            if (!in_array($filExtension, $allowedArr)) {
                $errors['allow_ext'] = 'Định dạng không đúng, chỉ chấp nhận ' . implode(', ', $allowedArr);
            }

            //Kiểm tra dung lượng file
            if (!empty($_FILES['file_upload']['size'])) {
                $size = $_FILES['file_upload']['size'];
                if ($size > $maxFileSize) {
                    $errors['max_size'] = 'Dung lượng vượt quá cho phép, chỉ được upload <= ' . number_format($maxFileSize) .' bytes';
                }
            } else {
                $errors['file_error'] = 'File bị lỗi, vui lòng kiểm tra lại';
            }
        }

        //Kiểm tra mảng errors để tiến hành upload
        if (empty($errors)) {
            $upload = move_uploaded_file($_FILES['file_upload']['tmp_name'], './uploads/' . $fileName);
            if ($upload) {
                echo 'Upload thành công';
            } else {
                echo 'Upload thất bại';
            }
        } else {
            foreach ($errors as $item) {
                echo $item . '<br/>';
            }
        }
    }
}
