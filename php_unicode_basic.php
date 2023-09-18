<?php
require_once 'functions.php';
$menuArr = [
    [
        'title' => 'Trang chủ',
        'link' => '#',
    ],

    [
        'title' => 'Giới thiệu',
        'link' => '#',
    ],

    [
        'title' => 'Dịch vụ',
        'link' => '#',
        'sub' => [
            [
                'title' => 'Thiết kế web',
                'link' => '#',
                'sub' => [
                    [
                        'title' => 'Web App',
                        'link' => '#',
                    ],

                    [
                        'title' => 'Website',
                        'link' => '#',
                    ],
                ],
            ],

            [
                'title' => 'Dịch vụ SEO',
                'link' => '#',
            ],

            [
                'title' => 'Phần mềm',
                'link' => '#',
                'sub' => [
                    [
                        'title' => 'Quản lý bán hàng',
                        'link' => '#',
                    ],

                    [
                        'title' => 'Quản lý khách hàng',
                        'link' => '#',
                    ],
                ],
            ],
        ],
    ],

    [
        'title' => 'Tin tức',
        'link' => '#',
    ],

    [
        'title' => 'Liên hệ',
        'link' => '#',
    ],
];

buildMenu($menuArr);
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
