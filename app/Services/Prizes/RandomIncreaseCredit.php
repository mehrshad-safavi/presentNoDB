<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;

class RandomIncreaseCredit extends Prize implements PrizeInterface
{
    public const ID = 7;

    public const TITLE = 'افزایش اعتبار تصادفی';

    function provideFields(): array
    {
        return [
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
        ];
    }
    function setId(): void
    {
        self::$id = self::ID;
    }
    function setTitle(): void
    {
        self::$title = self::TITLE;
    }
}
