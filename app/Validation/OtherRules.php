<?php

namespace App\Validation;

use CodeIgniter\I18n\Time;

class OtherRules
{
    /**
     * Valida que una fecha sea mayor o igual a la fecha actual.
     */
    public function date_greater_than_equal_to_now(string $date): bool
    {
        return Time::parse($date)->isAfter(Time::now());
    }
}
