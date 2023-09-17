<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charactor Count</title>
</head>

<body>
    <?php
    $content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.';
    $resultArr = [];
    if (strlen($content) > 0) {
        for ($i = 0; $i < strlen($content); $i++) {
            $char = $content[$i];
            if (!empty($resultArr[$char])) {
                $resultArr[$char]++;
            } else {
                $resultArr[$char] = 1;
            }
        }
    }
    
    echo '<pre>';
    print_r($resultArr);
    echo '</pre>';
    ?>
    <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th width="5%">STT</th>
                <th>Ký tự</th>
                <th width="15%">Số lần xuất hiện</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                if(!empty($resultArr)):
                    $count = 0;
                    foreach($resultArr as $key=>$value):
                        $count++;
            ?>
            <tr>
                <td width="5%"><?php echo $count; ?></td>
                <td><?php echo $key == ' ' ? 'Khoảng trắng' : $key; ?></td>
                <td><?php echo $value; ?></td>
            </tr>
            <?php 
            endforeach;
        else:
            ?>
            <tr>
                <td colspan="3" style="text-align: center;">Không có kết quả</td>
            </tr>
            <?php 
            endif;
            ?>
        </tbody>
    </table>
</body>

</html>
