<?php
/*
 * Tổng quan về Object (Đối tượng)
 * - Object là một tập hợp các thuộc tính cụ thể nào đó cho một đối tượng cụ thể
 * - Object bao gồm:
 * + Hằng số (const)
 * + Thuộc tính (biến)
 * + Phương thức (Hàm)
 * - Để có object, ta cần phải định nghĩa lớp (class)
 * */

/*
 * Cú pháp khởi tạo object
 *
 * $tenBien = new TenLop(thamso);
 * hoặc
 * $tenBien = new TenLop();
 * hoặc
 * $tenbien = new TenLop;
 *
 * */

$dateObject = new DateTime();
var_dump($dateObject);
echo '<br>';

/*
 * Cách sử dụng:
 * - Gọi hằng số: $tenBienDoiTuong::tenhang;
 * - Gọi thuộc tính: $tenBienDoiTuong->tenthuoctinh (Không có dấu $)
 * - Gọi phương thức: $tenBienDoiTuong->tenPhuongThuc(thamso)
 *
 * */

//  1. Gọi hằng số
echo $dateObject::RSS.'<br/>';
echo $dateObject::COOKIE.'<br/>';

// 2. Gọi phương thức
echo $dateObject->format('Y-m-d H:i:s').'<br/>';

// 3. Gọi thuộc tính
class Demoobject{
    public $education = 'Unicode';
}
$demo = new Demoobject();
echo $demo->education.'<br/>';

// 4. Ví dụ StdClass
$demoStdClass = new stdClass();
$demoStdClass->name = 'Lại Minh Kiệt';
var_dump($demoStdClass);