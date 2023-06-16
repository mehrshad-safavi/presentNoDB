<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;

class BurnScore extends Prize implements PrizeInterface
{
    public const ID = 3;
    public const TITLE = 'سوختن امتیاز';

    function provideFields(): array
    {
        return [
            [
                'type' => 'text',
                'valueType' => 'percent',
                'name' => 'percent',
                'label' => 'درصد',
            ]
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
