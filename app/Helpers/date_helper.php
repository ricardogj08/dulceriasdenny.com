<?php

use CodeIgniter\I18n\Time;

/**
 * Humaniza una fecha.
 */
function humanizeDate(string $date)
{
    return Time::parse($date)->toLocalizedString('dd MMMM, YYYY - hh:mm a');
}
