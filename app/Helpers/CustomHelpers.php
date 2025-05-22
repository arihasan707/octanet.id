<?php

function formatRupiah($amount)
{
    $formatter =  new \NumberFormatter('id_ID', \NumberFormatter::CURRENCY);
    return $formatter->formatCurrency($amount, 'IDR');
}

function parseRupiah($value)
{
    return (int) str_replace(['Rp', '.', ' '], '', $value);
}
