<?php

use Carbon\Carbon;

if (!function_exists('format_date')) {

    function format_date($value)
    {
        if (empty($value)) return '';

        return \Carbon\Carbon::parse($value)->isoFormat('DD MMM YYYY');
    }

}

if (!function_exists('format_datetime')) {

    function format_datetime($value)
    {
        if (empty($value)) return '';

        return Carbon::instance(new \DateTime($value))->translatedFormat('d M Y à H:i');
    }

}

if (!function_exists('format_time')) {

    function format_time($value)
    {
        if (empty($value)) return '';

        return Carbon::instance(new \DateTime($value))->translatedFormat('H:i');
    }

}

if (!function_exists('format_date_full')) {

    function format_date_full($value)
    {
        if (empty($value)) return '';
        return Carbon::instance(new \DateTime($value))->translatedFormat('d F Y');
    }

}

if (!function_exists('format_datetime_full')) {

    function format_datetime_full($value)
    {
        if (empty($value)) return '';
        return Carbon::instance(new \DateTime($value))->translatedFormat('d F Y à H:i');
    }

}
