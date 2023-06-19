<?php

namespace App\Services;

abstract class Prize
{
    public $id;
    public $title;
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
            'id' => $this->id,
            'title' => $this->title,
        ];
    }

    public function validate($entry): void
    {
        $this->fields->validate($entry);
    }
}
