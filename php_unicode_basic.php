<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>

</head>

<body>
    <?php
    $customerArr = [
        [
            'name' => 'Minh Kiệt',
            'email' => 'laiminhkiet07052002@gmail.com',
            'phone' => '0376707091',
            'address' => 'Ho Chi Minh city, Viet Nam',
        ],
    
        [
            'name' => 'Hoàng Phúc',
            'email' => 'hoangphuc27052002@gmail.com',
            'phone' => '0998877321',
            'address' => 'Ho Chi Minh city, Viet Nam',
        ],

        [
            'name' => 'Hoàng Phúc',
            'email' => 'hoangphuc27052002@gmail.com',
            'phone' => '0998877321',
            'address' => 'Ho Chi Minh city, Viet Nam',
        ],
    
        [
            'name' => 'Vĩnh Thông',
            'email' => 'vinhthong07082002@gmail.com',
            'phone' => '0353218146',
            'address' => 'Ho Chi Minh city, Viet Nam',
        ],

        [
            'name' => 'Vĩnh Thông',
            'email' => 'vinhthong07082002@gmail.com',
            'phone' => '0353218146',
            'address' => 'Ho Chi Minh city, Viet Nam',
        ]
    ];
    if (!empty($customerArr)) {
        //Tìm phần tư mảng trùng
        $indexDuplicate = [];
        for ($i = 0; $i < count($customerArr) - 1; $i++) {
            for ($j = $i + 1; $j < count($customerArr); $j++) {
                if ($customerArr[$i]['email'] == $customerArr[$j]['email']) {
                    $indexDuplicate[] = $j;
                }
            }
        }
    
        //Xóa phần tử mảng trùng
        if (!empty($indexDuplicate)) {
            foreach ($indexDuplicate as $index) {
                if (isset($customerArr[$index])) {
                    unset($customerArr[$index]);
                }
            }
        }
    }
    ?>
    <table width="100%" border="1" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Họ và tên</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if(!empty($customerArr) && is_array($customerArr)):
                    $count = 0;
                    foreach($customerArr as $item):
                        $count++;
            ?>
            <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['phone']; ?></td>
                <td><?php echo $item['address']; ?></td>
            </tr>
            <?php 
                endforeach;
            else:
            ?>
            <tr>
                <td colspan="5" style="text-align: center;">Không có dữ liệu</td>
            </tr>
            <?php 
            endif;
            ?>
        </tbody>
    </table>
</body>

</html>
