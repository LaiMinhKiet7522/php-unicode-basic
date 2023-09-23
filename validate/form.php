<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Khai báo mảng errors để chứa lỗi
    $errors = [];

    //Validate fullname
    if (empty(trim($_POST['fullname']))) {
        $errors['fullname']['required'] = 'Họ và tên không được để trống';
    } else {
        if (strlen(trim($_POST['fullname'])) < 5) {
            $errors['fullname']['min'] = 'Họ và tên phải lớn hơn 5 ký tự';
        }
    }

    //Validate email
    if (empty(trim($_POST['email']))) {
        $errors['email']['required'] = 'Email không được để trống';
    } else {
        if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL)) {
            $errors['email']['invalid'] = 'Email không hợp lệ';
        }
    }

    //Validate age
    if (empty(trim($_POST['age']))) {
        $errors['age']['required'] = 'Tuổi không được để trống';
    } else {
        if (
            !filter_var(trim($_POST['age']), FILTER_VALIDATE_INT, [
                'options' => ['min_range' => 1],
            ])
        ) {
            $errors['age']['invalid'] = 'Tuổi không hợp lệ';
        }
    }
}
?>

<form action="" method="post">
    <p>
        Họ và tên:
    </p>
    <input type="text" name="fullname" placeholder="Họ và tên..." value="<?php echo !empty($_POST['fullname']) ? $_POST['fullname'] : false; ?>"> <br>
    <?php
    if (!empty($errors['fullname']['required'])) {
        echo '<span style="color: red;">' . $errors['fullname']['required'] . '</span>';
    }
    if (!empty($errors['fullname']['min'])) {
        echo '<span style="color: red;">' . $errors['fullname']['min'] . '</span>';
    }
    ?>
    <p>
        Email:
    </p>
    <input type="text" name="email" placeholder="Email..." value="<?php echo !empty($_POST['email']) ? $_POST['email'] : false; ?>"><br>
    <?php
    if (!empty($errors['email']['required'])) {
        echo '<span style="color: red;">' . $errors['email']['required'] . '</span>';
    }
    if (!empty($errors['email']['invalid'])) {
        echo '<span style="color: red;">' . $errors['email']['invalid'] . '</span>';
    }
    ?>
    <p>
        Tuổi:
    </p>
    <input type="text" name="age" placeholder="Tuổi..." value="<?php echo !empty($_POST['age']) ? $_POST['age'] : false; ?>"><br>
    <?php
    if (!empty($errors['age']['required'])) {
        echo '<span style="color: red;">' . $errors['age']['required'] . '</span>';
    }
    if (!empty($errors['age']['invalid'])) {
        echo '<span style="color: red;">' . $errors['age']['invalid'] . '</span>';
    }
    ?>

    <p>
        <button type="submit">Submit</button>
    </p>

</form>
