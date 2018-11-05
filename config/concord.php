<?php

return [
    'modules' => [
        Konekt\AppShell\Providers\ModuleServiceProvider::class => [
            'ui' => [
                'name' => 'Vanilo',
                'url' => '/admin/product'
            ]
        ],
        Vanilo\Framework\Providers\ModuleServiceProvider::class => [
//            'image' => [
//                'variants' => [
//                    'thumbnail' => [
//                        'width' => 250,
//                        'height' => 188,
//                        'fit' => 'crop'
//                    ]
//                ]
//            ],
            'currency' => [
                'code' => 'IDR',
                'sign' => 'Rp',
                'format' => '%2$s%1$g' // see sprintf. Amount is the first argument, currency is the second
            ]
        ]
    ]
];
