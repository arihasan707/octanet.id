<?php

function formatRupiah($amount)
{
    $formatter = new \NumberFormatter('id_ID', \NumberFormatter::CURRENCY);
    $formatted = $formatter->formatCurrency($amount, 'IDR');

    // Hilangkan koma + nol desimal
    $formatted = preg_replace('/([.,]00)(?=\D*$)/', '', $formatted);

    return $formatted;
}

function parseRupiah($value)
{
    return (int) str_replace(['Rp', '.', ' '], '', $value);
}
