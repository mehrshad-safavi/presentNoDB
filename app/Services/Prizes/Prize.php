<?php

namespace App\Services\Prizes;

use App\Services\Field;

class Prize
{
    use Field;

    protected int $id;
    protected string $title;
    protected $items = array();
    protected $fields = array();

    public function __construct(array $data)
    {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->fields = $data['fields'];
        $this->items = $data['items'] ?? [];

        // foreach ($data as $key => $value) {
        //     $this->{$key} = $value;
        // }
    }

    function getFields(): array
    {
        return $this->fields;
    }

    function introduction(): array
    {
        return ['id' => $this->id, 'title' => $this->title];
    }

    // function validate(): array
    // {
    //     return ['id' => $this->id, 'title' => $this->title];
    // }
}
