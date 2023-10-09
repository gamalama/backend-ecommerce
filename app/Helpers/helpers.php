<?php

if (!function_exists('moneyFormat')) {
    /**
     * moneyFormat
     *
     * @param mixed $str
     * @return string
     */
    function moneyFormat(string $str): string
    {
        return 'Rp. ' . number_format($str, '0', '', '.');
    }
}
