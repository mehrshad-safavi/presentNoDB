<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;

trait Field
{
    // protected $type;
    // protected $valueType;
    // protected $name;
    // protected $label;
    protected $fields = array();

    protected function validate($entry)
    {
        foreach ($this->fields as $field) {
            // $validator = Validator::make(['value' => $vlaue], [
            //     'value' => 'required|unique:posts|max:255',
            // ]);

            // $field->'';
        }
    }
}
