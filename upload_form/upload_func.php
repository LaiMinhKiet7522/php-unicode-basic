<?php
require_once 'functions.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //    $config = [
    //        'upload_dir' => './uploads',
    //        //'maxSize' => 3145728,
    //        'allowed' => 'png, gif, jpg, jpeg',
    //        'filename' => 'unicode.jpeg'
    //    ];
    //$data = uploadFile($config, 'file_upload');
    $files = fileMulti('file_upload');
    if (!empty($files)) {
        foreach ($files as $file) {
            
            $config = [
                'upload_dir' => './uploads',
                'maxSize' => 3145728,
                'allowed' => 'png, gif, jpg, jpeg',
                'filename' => uniqid() . '_unicode.jpeg'
            ];

            $data = uploadFile($config, 'file_upload', $file);

            echo '<pre>';
            print_r($data);
            echo '</pre>';
        }
    }
}
?>
<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file_upload[]" multiple />
    <button type="submit">Upload</button>
</form>
<?php
