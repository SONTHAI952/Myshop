<?php
return $menus = [
    [
        'label' => 'Bảng điều khiển',
        'route' => './?module=admin&controller=dashboard',
        'icon' => 'fa-columns'
    ],
    [
        'label' => 'Quản lý danh mục',
        'route' => './?module=admin&controller=category',
        'icon' => 'fa-list',
        'items' => [
            [
                'label' => 'Tất cả danh mục',
                'route' => './?module=admin&controller=category',
            ],
            [
                'label' => 'Thêm danh mục',
                'route' => './?module=admin&controller=category&action=create',
            ]
        ]
    ],
    [
        'label' => 'Quản lý sản phẩm',
        'route' => './?module=admin&controller=product',
        'icon' => 'fa-bread-slice',
        'items' => [
            [
                'label' => 'Tất cả sản phẩm',
                'route' => './?module=admin&controller=product',
            ],
            [
                'label' => 'Thêm sản phẩm',
                'route' => './?module=admin&controller=product&action=create',
            ]
        ]
    ],
    // [
    //     'label' => 'Coupon Manager',
    //     'route' => './?module=admin&controller=coupon',
    //     'icon' => 'fa-gift',
    //     'items' => [
    //         [
    //             'label' => 'All Coupon',
    //             'route' => './?module=admin&controller=coupon',
    //         ],
    //         [
    //             'label' => 'Add Coupon',
    //             'route' => './?module=admin&controller=coupon&action=create',
    //         ]
    //     ]
    // ],
    [
        'label' => 'Quản lý đánh giá',
        'route' => './?module=admin&controller=review',
        'icon' => 'fa-comment-alt',
        'items' => [
            [
                'label' => 'Tất cả đánh giá',
                'route' => './?module=admin&controller=review',
            ],
        ]
    ],
    // [
    //     'label' => 'Contact Manager',
    //     'route' => './?module=admin&controller=contact',
    //     'icon' => 'fa-envelope-open-text',
    //     'items' => [
    //         [
    //             'label' => 'All contact',
    //             'route' => './?module=admin&controller=contact',
    //         ],
    //     ]
    // ],
    // [
    //     'label' => 'Banner Manager',
    //     'route' => './?module=admin&controller=banner',
    //     'icon' => 'fa-image',
    //     'items' => [
    //         [
    //             'label' => 'All banner',
    //             'route' => './?module=admin&controller=banner',
    //         ],
    //         [
    //             'label' => 'Add banner',
    //             'route' => './?module=admin&controller=banner&action=create',
    //         ]
    //     ]
    // ],
    [
        'label' => 'Quản lý đơn hàng',
        'route' => './?module=admin&controller=order',
        'icon' => 'fa-receipt',
        'items' => [
            [
                'label' => 'Tất cả đơn hàng',
                'route' => './?module=admin&controller=order',
            ],
            // [
            //     'label' => 'Statistic',
            //     'route' => './?module=admin&controller=category',
            // ]
        ]
    ],
    [
        'label' => 'Quản lý tài khoản',
        'route' => './?module=admin&controller=account',
        'icon' => 'fa-user',
        'items' => [
            [
                'label' => 'Tất cả tài khoản',
                'route' => './?module=admin&controller=account',
            ],
            [
                'label' => 'Thêm tài khoản',
                'route' => './?module=admin&controller=account&action=create',
            ]
        ]
    ]
];
