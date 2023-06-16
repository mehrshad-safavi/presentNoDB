<?php

namespace App\Services;

abstract class Prize
{
    public static $id;
    public static $title;
    protected Fields $fields;

    public function __construct()
    {
        $this->setId();
        $this->setTitle();
        $this->fields = new Fields($this->providefields());
    }

    public function getFields(): array
    {
        return $this->fields->get();
    }

    function introduction(): array
    {
        return [
            'id' => self::$id,
            'title' => self::$title,
        ];
    }

    public function validate($entry): void
    {
        $this->fields->validate($entry);
    }
}
