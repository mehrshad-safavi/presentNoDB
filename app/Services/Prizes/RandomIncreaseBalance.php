<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;

class RandomIncreaseBalance extends Prize implements PrizeInterface
{
    public const ID = 5;
    public const TITLE = 'افزایش کیف پول تصادفی';

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
