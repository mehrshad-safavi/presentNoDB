<?php

return [
    [
        'id' => 1,
        'title' => 'gift',
        'fields' => [
            [
                'type' => 'list',
                'valueType' => 'numeric',
                'name' => 'id',
                'label' => 'شناسه',
                'items' => [
                    '1' => 'هدیه 1',
                    '2' => 'هدیه 2'
                ],
            ]
        ],
    ],
    [
        'id' => 2,
        'title' => 'increase score',
        'fields' => [
            [
                'type' => 'text',
                'valueType' => 'numeric',
                'name' => 'value',
                'label' => 'مقدار',
            ]
        ],
    ],
    [
        'id' => 3,
        'title' => 'burn score',
        'fields' => [
            [
                'type' => 'text',
                'valueType' => 'percent',
                'name' => 'percent',
                'label' => 'درصد',
            ]
        ],
    ],
    [
        'id' => 4,
        'title' => 'increase balance',
        'fields' => [
            [
                'type' => 'text',
                'valueType' => 'currency',
                'name' => 'price',
                'label' => 'مبلغ',
            ]
        ],
    ],
    [
        'id' => 5,
        'title' => 'random increase balance',
        'fields' => [
            [
                'type' => 'text',
                'valueType' => 'currency',
                'name' => 'minPrice',
                'label' => 'حداقل مبلغ',
            ],
            [
                'type' => 'text',
                'valueType' => 'currency',
                'name' => 'maxPrice',
                'label' => 'حداکثر مبلغ',
            ],
        ],
    ],
    [
        'id' => 6,
        'title' => 'increase credit',
        'fields' => [
            [
                'type' => 'text',
                'valueType' => 'currency',
                'name' => 'price',
                'label' => 'مبلغ',
            ],
            [
                'type' => 'text',
                'valueType' => 'date',
                'name' => 'duedate',
                'label' => 'تاریخ انقصا',
            ],
        ],
    ],
    [
        'id' => 7,
        'title' => 'random increase credit',
        'fields' => [
            [
                'type' => 'text',
                'valueType' => 'currency',
                'name' => 'minPrice',
                'label' => 'حداقل مبلغ',
            ],
            [
                'type' => 'text',
                'valueType' => 'currency',
                'name' => 'maxPrice',
                'label' => 'حداکثر مبلغ',
            ],
            [
                'type' => 'text',
                'valueType' => 'date',
                'name' => 'duedate',
                'label' => 'تاریخ انقصا',
            ],
        ],
    ],
    [
        'id' => 8,
        'title' => 'medallion',
        'fields' => [
            [
                'type' => 'list',
                'valueType' => 'numeric',
                'name' => 'id',
                'label' => 'شناسه',
                'items' => [
                    '1' => 'طلایی',
                    '2' => 'نقره ای',
                    '3' => 'برنزی',
                ],
            ],
        ],
    ],
];
