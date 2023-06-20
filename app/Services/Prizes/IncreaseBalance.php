<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;
use App\Services\Field;
use App\Services\Fields;

class IncreaseBalance extends Prize implements PrizeInterface
{
    public const ID = 4;
    public const TITLE = 'اقزایش کیف پول';

    function provideFields(): Fields
    {
        return new Fields([new Field([
            'type' => 'text',
            'valueType' => 'currency',
            'name' => 'price',
            'label' => 'مبلغ',

        ])]);

        // return [
        //     [
        //         'type' => 'text',
        //         'valueType' => 'currency',
        //         'name' => 'price',
        //         'label' => 'مبلغ',
        //     ]
        // ];
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
