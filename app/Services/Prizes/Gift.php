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
        $this->id = self::ID;
    }
    function setTitle(): void
    {
        $this->title = self::TITLE;
    }
}
