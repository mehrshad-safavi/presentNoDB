<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator as FacadesValidator;

trait Validator
{
    public static function currencyValidator($value): void
    {
        self::laravelValidator($value, ['required', 'regex:/^\d{1,3}(?:,?\d{3})*(?:\.\d{2})?$/']);
    }
    public static function numericValidator($value): void
    {
        self::laravelValidator($value, ['required', 'numeric']);
    }
    public static function dateValidator($value): void
    {
        self::laravelValidator($value, ['required', 'date']);
    }
    public static function percentValidator($value): void
    {
        self::laravelValidator($value, ['required', 'numeric', 'max:100', 'min:0']);
    }

    public static function laravelValidator(string $value, array $rules): void
    {
        $validate = FacadesValidator::make(['value' => $value], [
            'value' => $rules
        ]);
        if ($validate->fails()) {
            throw new \Exception(implode(',', $validate->errors()->all()), 1);
        }
    }
}
