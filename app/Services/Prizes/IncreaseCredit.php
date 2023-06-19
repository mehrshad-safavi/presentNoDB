<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;

class IncreaseCredit extends Prize implements PrizeInterface
{
    public const ID = 6;
    public const TITLE = 'افزایش امتیاز';

    function provideFields(): array
    {
        return [
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
        ];
    }
    function setId(): void
    {
        $this->id = self::ID;
    }
    function setTitle(): void
    {
        $this->title = self::TITLE;
    }
}
