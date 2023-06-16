<?php

namespace App\Services;


interface PrizeInterface
{
    public function provideFields(): array;
    public function setId(): void;
    public function setTitle(): void;
}
