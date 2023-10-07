<?php

//Hàm uploadFile (1 file, nhiều file)

function uploadFile($config, $fieldName, $file = [])
{

    if (!empty($file)) {
        $_FILES[$fieldName] = $file;
    }

    if (!empty($_FILES[$fieldName])) {

        $errors = [];

        $fileName = $_FILES[$fieldName]['name'];

        $fileNameArr = explode('.', trim($fileName));

        $fileExt = end($fileNameArr);

        if (!empty($config['filename'])) {
            $fileName = $config['filename'];
        }

        //Kiểm tra xem file đã được chọn chưa
        if ($_FILES['file_upload']['error'] == 4) {
            $errors[] = 'choose_file';
        } else {

            //Kiểm tra định dạng được phép
            if (!empty($config['allowed'])) {
                $allowArr = explode(',', $config['allowed']);
                $allowArr = array_filter($allowArr);
                foreach ($allowArr as $key => $allow) {
                    $allowArr[$key] = trim($allow);
                }
                if (!empty($allowArr) && !in_array($fileExt, $allowArr)) {
                    $errors[] = 'allow_ext';
                }
            }

            //Kiểm tra size
            if (!empty($_FILES[$fieldName]['size'])) {
                $size = $_FILES[$fieldName]['size'];
                if (!empty($config['maxSize']) && $size > $config['maxSize']) {
                    $errors[] = 'max_size';
                }
            } else {
                $errors[] = 'file_error';
            }
        }

        //Kiểm tra mảng $errors để thực hiện upload
        if (empty($errors)) {
            $upload = move_uploaded_file($_FILES['file_upload']['tmp_name'], $config['upload_dir'] . '/' . $fileName);

            if ($upload) {
                return [
                    'status' => 'success',
                    'fileOr' => $_FILES[$fieldName]['name'],
                    'fileName' => $fieldName,
                    'size' => $_FILES[$fieldName]['size'],
                    'path' => $config['upload_dir'] . '/' . $fileName
                ];
            } else {
                return false;
            }
        }
    }

    if (!empty($errors)) {
        $errors['status'] = 'error';
    }
    return $errors;
}

function fileMulti($fieldName)
{
    $fileArr = [];
    if (!empty($_FILES[$fieldName])) {
        foreach ($_FILES[$fieldName]['name'] as $key => $fileName) {
            $fileArr[] = [
                'name' => $fileName,
                'tmp_name' => $_FILES[$fieldName]['tmp_name'][$key],
                'error' => $_FILES[$fieldName]['error'][$key],
                'type' => $_FILES[$fieldName]['type'][$key],
                'size' => $_FILES[$fieldName]['size'][$key]
            ];
        }
    }
    return $fileArr;
}
