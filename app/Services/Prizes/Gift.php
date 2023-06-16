<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;

class Gift extends Prize implements PrizeInterface
{
    public const ID = 1;
    public const TITLE = 'هدیه';

    function provideFields(): array
    {
        return [
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
