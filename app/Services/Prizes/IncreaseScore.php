<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;

class IncreaseScore extends Prize implements PrizeInterface
{
    public const ID = 2;
    public const TITLE = 'افزایش امتیاز';

    function provideFields(): array
    {
        return [
            [
                'type' => 'text',
                'valueType' => 'numeric',
                'name' => 'value',
                'label' => 'مقدار',
            ]
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
