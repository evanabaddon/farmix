<?php

use App\Settings\GeneralSettings;

function formatCurrency(float|int $amount, bool $withCode = false): string
{
    $settings = app(GeneralSettings::class);

    $formattedAmount = number_format(
        $amount,
        (int) $settings->site_currency_format,
        ',',
        '.'
    );

    $currency = $settings->site_currency_position === 'left'
        ? $settings->site_currency_symbol . ' ' . $formattedAmount
        : $formattedAmount . ' ' . $settings->site_currency_symbol;

    return $withCode
        ? $currency . ' (' . $settings->site_currency_code . ')'
        : $currency;
}
