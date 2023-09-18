<?php
require_once 'functions.php';
$menuArr = [
    [
        'id' => 1,
        'title' => 'Trang chủ',
        'link' => '#',
        'parent' => 0,
    ],

    [
        'id' => 2,
        'title' => 'Giới thiệu',
        'link' => '#',
        'parent' => 0,
    ],

    [
        'id' => 3,
        'title' => 'Dịch vụ',
        'link' => '#',
        'parent' => 0,
    ],

    [
        'id' => 4,
        'title' => 'Thiết kế web',
        'link' => '#',
        'parent' => 3,
    ],

    [
        'id' => 5,
        'title' => 'Dịch vụ SEO',
        'link' => '#',
        'parent' => 3,
    ],

    [
        'id' => 6,
        'title' => 'Phần mềm',
        'link' => '#',
        'parent' => 3,
    ],

    [
        'id' => 7,
        'title' => 'Web bán hàng',
        'link' => '#',
        'parent' => 4,
    ],

    [
        'id' => 8,
        'title' => 'Web tin tức',
        'link' => '#',
        'parent' => 4,
    ],

    [
        'id' => 9,
        'title' => 'Tin tức',
        'link' => '#',
        'parent' => 0,
    ],

    [
        'id' => 10,
        'title' => 'Liên hệ',
        'link' => '#',
        'parent' => 0,
    ],
];

makeMenu($menuArr);
?>

<!-- <ul class="menu">
    <li><a href="">Trang chủ</a></li>
    <li><a href="">Giới thiệu</a></li>
    <li><a href="">Dịch vụ</a></li>
    <ul class="sub-menu">
        <li><a href="">Thiết kế web</a></li>
        <li><a href="">Dịch vụ SEO</a></li>
        <li><a href="">Phầm mềm</a></li>
        <ul class="sub-menu">
            <li><a href="">Quản lý bán hàng</a></li>
            <li><a href="">Quản lý khách hàng</a></li>
        </ul>
    </ul>
    <li><a href="">Tin tức</a></li>
    <li><a href="">Liên hệ</a></li>
</ul> -->
