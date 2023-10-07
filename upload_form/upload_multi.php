<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $allowArr = ['jpg', 'png', 'gif', 'jpeg'];
    $maxFileSize = 3145728;

    if (!empty($_FILES['file_upload'])) {
        foreach ($_FILES['file_upload']['name'] as $key => $fileName) {
            $fileOr = $fileName;

            //Đổi tên file
            $fileNameArr = explode('.', $fileName);
            $fileExt = end($fileNameArr);
            $fileBefore = sha1(uniqid());

            $fileName = $fileBefore . $fileExt;

            if (in_array($fileExt, $allowArr)) {
                if ($_FILES['file_upload']['size'][$key] <= $maxFileSize) {
                    $upload = move_uploaded_file($_FILES['file_upload']['tmp_name'][$key], './uploads/' . $fileName);
                    if ($upload) {
                        echo 'Upload file : ' . $fileOr . ' thành công. <a href="./uploads/' . $fileName . '">' . $fileOr . '</a><br />';
                    } else {
                        echo 'Upload file : ' . $fileOr . ' không thàn công';
                    }
                }else{
                    echo 'File '.$fileOr.' vượt quá dung lượng cho phép';
                }
            }else{
                echo 'File '.$fileOr.' không đúng định dạng cho phép';
            }
        }
    }
}
