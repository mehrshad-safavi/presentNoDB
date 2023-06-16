<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

class Field
{
    protected $type;
    protected ValueType $valueType;
    protected $name;
    protected $label;
    protected $items;

    public function __construct(array $field)
    {
        $this->type = new Type($field['type']);
        $this->valueType = new ValueType($field['valueType']);
        $this->name = $field['name'];
        $this->label = $field['label'];
        $this->items = $field['items'] ?? null;
    }
    public function get()
    {
        $fields =  [
            'type' => $this->type->get(),
            'valueType' => $this->valueType->get(),
            'name' => $this->name,
            'label' => $this->label,
        ];
        is_null($this->items) ?: $fields['items'] = $this->items;
        return $fields;
    }

    public function validate($value)
    {
        $this->valueType->validate($value);
        $this->type->validate($value, $this->items);
    }

    public function nameBelongs($name)
    {
        return $this->name === $name;
    }
}
