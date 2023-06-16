<?php

namespace App\Services;

class Fields
{
    protected array $fields;

    public function __construct($fields)
    {
        foreach ($fields as $field) {
            $this->fields[] = new Field($field);
        }
    }

    public function get()
    {
        foreach ($this->fields as $field) {
            $result[] = $field->get();
        }
        return $result;
    }

    public function validate(array $entry)
    {
        $validated = false;
        foreach ($this->fields as $field) {
            if ($field->nameBelongs($entry['name'])) {
                $field->validate($entry['value']);
                $validated = true;
            }
        }
        if (!$validated) {
            throw new \Exception("wrong name!", 1);
        }
    }
}
