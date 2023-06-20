<?php

namespace App\Services;


interface PrizeInterface
{
    public function provideFields(): Fields;
    public function setId(): void;
    public function setTitle(): void;
}
