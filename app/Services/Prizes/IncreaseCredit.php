<?php

namespace App\Services\Prizes;

use App\Services\Prize;
use App\Services\PrizeInterface;
use App\Services\Field;
use App\Services\Fields;

class IncreaseCredit extends Prize implements PrizeInterface
{
    public const ID = 6;
    public const TITLE = 'افزایش امتیاز';

    function provideFields(): fields
    {
        return new Fields([
            new Field([
                'type' => 'text',
                'valueType' => 'currency',
                'name' => 'price',
                'label' => 'مبلغ',
            ]),
            new Field([
                'type' => 'text',
                'valueType' => 'date',
                'name' => 'duedate',
                'label' => 'تاریخ انقصا',
            ]),

        ]);

        // return [
        //     [
        //         'type' => 'text',
        //         'valueType' => 'currency',
        //         'name' => 'price',
        //         'label' => 'مبلغ',
        //     ],
        //     [
        //         'type' => 'text',
        //         'valueType' => 'date',
        //         'name' => 'duedate',
        //         'label' => 'تاریخ انقصا',
        //     ],
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
