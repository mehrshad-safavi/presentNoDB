<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;

class Medallion extends Prize implements PrizeInterface
{
    public const ID = 8;
    public const TITLE = 'مدال';

    function provideFields(): array
    {
        return [
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
